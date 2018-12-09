@extends('layouts.master_admin')
@section('content')
 
@if(session()->has('message'))
    <div class="alert alert-success">
    {{session()->get('message')}}
    </div>
@endif

<h1>Create</h1>

{!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store']) !!}

<div class="form-group">
    
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">
    
{!! Form::label('email', 'Email:') !!}
{!! Form::text('email', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">

{!! Form::label('phone', 'Phone:') !!}
{!! Form::text('phone', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">

{!! Form::label('role_id', 'Role:') !!}
{!! Form::select('role_id', ['choose' => 'Choose Options', '1' => 'Super Admin', '2' => 'Admin', '3' => 'User'], null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">

{!! Form::label('password', 'Password: ') !!}
{!! Form::password('password', ['class' => 'form-control-sm'])!!}

</div>

<div class="form-group">

{!! Form::submit('Create User', ['class' => 'btn btn-primary'])!!}

</div>
{!! Form::close() !!}

@include('includes.form_error')
@endsection




