@extends('layout.main_layout')

@section('title', 'Edit Info People')


@section('content')

@if (session('status_fail'))
<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="alert alert-danger">
		    {{ session('status_fail') }}
		</div>
	</div>
</div>
@endif

@if (session('status_success'))
<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="alert alert-success">
		    {{ session('status_success') }}
		</div>
	</div>
</div>
@endif

<form method="POST" action="{{ url('edit/submit') }}">
	@csrf

	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="mb-3">
				<label for="" class="form-label">Name</label>
			  	<input type="text" class="form-control" id="" name="form_name" placeholder="" value="{{ $staff_info_arr->name }}" required>
			</div>

			<div class="mb-3">
				<label for="" class="form-label">Mobile No</label>
			  	<input type="text" class="form-control" id="" name="form_mobile" placeholder="" value="{{ $staff_info_arr->mobile_no }}" required>
			</div>

			<div class="mb-3">
				<label for="" class="form-label">Email address</label>
			  	<input type="text" class="form-control" id="" name="form_email" placeholder="" value="{{ $staff_info_arr->email }}" required>
			</div>

			<div class="mb-3">
				<label for="" class="form-label">Type</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="form_type" id="form_type" value="user" {{ $checked_user }}>
					<label class="form-check-label" for="form_type"> User</label>
				</div>
			  	<div class="form-check">
					<input class="form-check-input" type="radio" name="form_type" id="form_type" value="admin" {{ $checked_admin }} >
					<label class="form-check-label" for="form_type"> Admin</label>
				</div>
			</div>

			<input type="hidden" name="form_id" id="form_id" value="{{ $staff_info_arr->id }}">

			<div class="mb-3 text-center">
				<button type="submit" class="btn btn-success" style="width:300px">Save</button>
				&nbsp;
				<a href="{{ url('') }}">
				<button type="button" class="btn btn-secondary">Back to List</button></a>
			</div>
		</div>
	</div>
	
</form>

@endsection
