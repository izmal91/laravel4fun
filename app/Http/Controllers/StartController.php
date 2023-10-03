<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StartController extends Controller
{
    public function index(Request $request)
    {
        //search filter
        $search_name = $request->input('search-name');

        //get staff list from DB
        $q = Staff::where('active','1')->orderByDesc('created_date');

        if(!empty($search_name))
        {
            $q->where('name','like',$search_name.'%');
        }

        $staff_arr = $q->get();

        //view
        return view('firstPage', compact('staff_arr','search_name'));
    }

    public function create_new()
    {
        //view
        return view('createNew');
    }

    public function save_submit(Request $request)
    {
        $form_name = $request->input('form_name');
        $form_mobile = $request->input('form_mobile');
        $form_email = $request->input('form_email');
        $form_type = $request->input('form_type');
        $form_id = $request->input('form_id','0');

        if($form_id > 0)
        {
            //do update section
            //find info first, if valid, then do update
            $staff_info_arr = Staff::find($form_id);
            if($staff_info_arr->id > 0)
            {
                //update in DB
                $staff_info_arr->name = $form_name;
                $staff_info_arr->email = $form_email;
                $staff_info_arr->mobile_no = $form_mobile;
                $staff_info_arr->user_type = $form_type;

                $staff_info_arr->save();

                //back to view edit
                return redirect('/edit/'.$staff_info_arr->id)->with('status_success', 'Info Saved!');
            }
            else
            {
                //back to view edit
                return redirect('/edit/'.$staff_info_arr->id)->with('status_fail', 'No info found!');
            }
        }

        //do insert section
        //insert into DB
        $staff_q = Staff::create([
            'name' => $form_name,
            'email' => $form_email,
            'mobile_no' => $form_mobile,
            'user_type' => $form_type,
            'created_from' => 'portal',
        ]);

        //check id is exist or not
        if($staff_q->id > 0)
        {
            //success create redirect to list page, with status success
            return redirect('')->with('status', 'People created!');
        }

        //no id created, means fail.
        //back to create form. with input is bring back all old input from user.
        return back()->withInput()->with('status_fail', 'Fail to create!');
    }

    public function edit(string $id)
    {
        $staff_info_arr = Staff::find($id);

        $checked_admin = '';
        $checked_user = 'checked';
        if($staff_info_arr->user_type == 'admin')
        {
            $checked_admin = 'checked';
            $checked_user = '';
        }

        return view('editPeople', compact('staff_info_arr','checked_admin','checked_user'));
    }

    public function remove(string $id)
    {
        $staff_info_arr = Staff::find($id);
        if($staff_info_arr->id > 0)
        {
            //update in DB
            $staff_info_arr->active = '0';

            $staff_info_arr->save();

            //back to view edit
            return redirect('/')->with('status_success', 'Success Removed!');
        }
        else
        {
            //back to view edit
            return redirect('/')->with('status_fail', 'No info found!');
        }
    }
}
