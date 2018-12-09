@extends('layouts.master_admin')
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
    {!! Form::text('marka', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">
    
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">

    {!! Form::label('godiste', 'Godiste:') !!}
    {!! Form::text('godiste', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">

    {!! Form::label('tip', 'Tip:') !!}
    {!! Form::text('tip', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">

    {!! Form::label('gorivo', 'Gorivo: ') !!}
    {!! Form::text('gorivo', null, ['class' => 'form-control-sm'])!!}

</div>
<div class="form-group">

    {!! Form::label('kubikaza', 'Kubikaza: ') !!}
    {!! Form::text('kubikaza', null, ['class' => 'form-control-sm'])!!}
    
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