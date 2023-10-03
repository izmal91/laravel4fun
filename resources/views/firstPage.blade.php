@extends('layout.main_layout')

@section('title', 'List People')


@section('content')
<div class="d-flex justify-content-between py-2">
	<form method="GET" action="{{ url('') }}">
	<div class="input-group" style="width:300px;">
	  	<input type="search" class="form-control" placeholder="Search Name" name="search-name" value="{{ $search_name }}">
	  	<button class="btn btn-outline-secondary" type="submit" id="btn_search">Search</button>
	</div>
	</form>

	<a href="{{ url('create-new') }}">
	<button type="button" class="btn btn-secondary">Create New</button></a>
</div>

@if (session('status_success'))
<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="alert alert-success">
		    {{ session('status_success') }}
		</div>
	</div>
</div>
@endif

@if (session('status_fail'))
<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="alert alert-danger">
		    {{ session('status_fail') }}
		</div>
	</div>
</div>
@endif

<div >
	
</div>

<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th width="7%" class="text-center">No</th>
			<th >Name</th>
			<th width="15%">Email</th>
			<th width="15%">Mobile</th>
			<th width="10%" class="text-center">Type</th>
			<th width="15%" class="text-center">Created</th>
			<th width="10%" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		@php
		    $noCount = 1;
		@endphp
		@foreach ($staff_arr as $staff)
		<tr>
			<td class="text-center">{{ $noCount++ }}</td>
			<td>{{ $staff->name }}</td>
			<td>{{ $staff->email }}</td>
			<td>{{ $staff->mobile_no }}</td>
			<td class="text-center">{{ strtoupper($staff->user_type) }}</td>
			<td class="text-center">{{ date('d-m-Y h:i A',strtotime($staff->created_date)) }}</td>
			<td class="text-center">
				<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
					<a href="{{ url('edit/'.$staff->id) }}">
					<button type="button" class="btn btn-info">Edit</button></a>

					<a href="{{ url('remove/'.$staff->id) }}" onclick="return confirm('Are you sure to remove this?')">
					<button type="button" class="btn btn-danger">Delete</button></a>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
