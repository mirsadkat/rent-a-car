@extends('layouts.master_admin')
@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
	{{session()->get('message')}}
</div>
@endif

<div class="col-md-6">

<h1>Edit</h1>

{!! Form::open(['method' => 'POST', 'action' => ['AdminUserController@update', $user]]) !!}

<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', $user->name, ['class' => 'form-control-sm'])!!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', $user->email, ['class' => 'form-control-sm'])!!}
</div>

<div class="form-group">
	{!! Form::hidden('password', $user->password, ['class' => 'form-control-sm'])!!}
</div>

<div class="form-group">
	{!! Form::label('phone', 'Phone:') !!}
	{!! Form::text('phone', $user->phone, ['class' => 'form-control-sm'])!!}
</div>

<div class="form-group">
	{!! Form::label('role_id', 'Role:') !!}
	{!! Form::select('role_id', $roles, $user->role_id, ['class' => 'form-control-sm'])!!}
</div>

<div class="form-group">
	{!! Form::label('is_active', 'Active?:') !!}
	{!! Form::select('is_active', [ '0' => 'Blocked', '1' => 'Active'], $user->is_active, ['class' => 'form-control-sm'])!!}
</div>


<div class="form-group">
	{!! Form::submit('Save', ['class' => 'btn btn-primary'])!!}
</div>

</div>
{!! Form::close() !!}

@include('includes.form_error')
@endsection




