@extends('layouts.master_admin')
@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role_id }}</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
            <td>{{ $user->updated_at->diffForHumans() }}</td>
            <td><a href="{{ url('admin/users/edit', ['id' => $user->id]) }}">Edit</a></td>
            <td><a href="{{ url('admin/users/delete', ['id' => $user->id]) }}">Delete</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection