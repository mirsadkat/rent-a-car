@extends('layouts.master_admin')
@section('content')
<h1>Vehicles</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Marka</th>
        <th scope="col">Model</th>
        <th scope="col">Godiste</th>
        <th scope="col">Tip</th>
        <th scope="col">Gorivo</th>
        <th scope="col">Kubikaza</th>
        <th scope="col">Slika</th>
      </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
          <tr>
            <th scope="row">{{ $vehicle->id }}</th>
            <td>{{ $vehicle->marka }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->godiste }}</td>
            <td>{{ $vehicle->tip }}</td>
            <td>{{ $vehicle->gorivo }}</td>
            <td>{{ $vehicle->kubikaza }}</td>
            <td>{{ $vehicle->slika }}</td>
            
            <td><a href="{{ url('admin/vehicles/edit', ['id' => $vehicle->id]) }}">Edit</a></td>
            <td><a href="{{ url('admin/vehicles/delete', ['id' => $vehicle->id]) }}">Delete</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection