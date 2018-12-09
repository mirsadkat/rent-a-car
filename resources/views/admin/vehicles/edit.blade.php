@extends('layouts.master_admin')
@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
	{{session()->get('message')}}
</div>
@endif

<div class="col-md-6">

    <h1>Edit</h1>

        {!! Form::open(['method' => 'POST', 'action' => ['AdminCarsController@update', $vehicle]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $vehicle->marka, ['class' => 'form-control-sm'])!!}
    </div>@extends('layouts.master_admin')
    @section('content')
    <h1>Novo Vozilo</h1>
    
    @if(session()->has('message'))
        <div class="alert alert-success">
        {{session()->get('message')}}
        </div>
    @endif
    
    {!! Form::open(['method'=>'POST', 'action'=>'AdminCarsController@store']) !!}
    
    <div class="form-group">
        
        {!! Form::label('marka', 'Marka:') !!}
        {!! Form::text('marka', $vehicle->marka, ['class' => 'form-control-sm'])!!}
    
    </div>
    <div class="form-group">
        
        {!! Form::label('model', 'Model:') !!}
        {!! Form::text('model', $vehicle->model, ['class' => 'form-control-sm'])!!}
    
    </div>
    <div class="form-group">
    
        {!! Form::label('godiste', 'Godiste:') !!}
        {!! Form::text('godiste', $vehicle->godiste, ['class' => 'form-control-sm'])!!}
    
    </div>
    <div class="form-group">
    
        {!! Form::label('tip', 'Tip:') !!}
        {!! Form::text('tip', $vehicle->tip, ['class' => 'form-control-sm'])!!}
    
    </div>
    <div class="form-group">
    
        {!! Form::label('gorivo', 'Gorivo: ') !!}
        {!! Form::text('gorivo', $vehicle->gorivo, ['class' => 'form-control-sm'])!!}
    
    </div>
    <div class="form-group">
    
        {!! Form::label('kubikaza', 'Kubikaza: ') !!}
        {!! Form::text('kubikaza', $vehicle->kubikaza, ['class' => 'form-control-sm'])!!}
        
    </div>
    
    <div class="form-group">
    
        <form enctype="multipart/form-data" method="POST" action="/vehicles">
            {!! Form::label('slika', 'Slika') !!}
            <input type="file" name="slika">
        </form>
            
    </div>
    
    <div class="form-group">
        {!! Form::submit('Kreiraj Vozilo', ['class' => 'btn btn-primary'])!!}
    </div>
    
        {!! Form::close() !!}
    
    @include('includes.form_error')
    @endsection

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', $vehicle->model, ['class' => 'form-control-sm'])!!}
    </div>

    <div class="form-group">
        {!! Form::hidden('password', $vehicle->godiste, ['class' => 'form-control-sm'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', $vehicle->tip, ['class' => 'form-control-sm'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', $vehicle->gorivo, ['class' => 'form-control-sm'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', $vehicle->kubikaza, ['class' => 'form-control-sm'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', $vehicle->slika, ['class' => 'form-control-sm'])!!}
    </div>


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary'])!!}
    </div>

</div>

    {!! Form::close() !!}

@include('includes.form_error')
@endsection




