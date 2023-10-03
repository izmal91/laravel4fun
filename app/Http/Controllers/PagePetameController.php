<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class PagePetameController extends Controller
{
    public function index()
    {
        
    }

    public function page_submit()
    {
        $arr = Staff::all();

        return view('page_pertama_view',compact('arr'));
    }
}
