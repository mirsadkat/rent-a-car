@extends('layouts.master_admin')
@section('content')
  <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
        Welcome, <?php echo Auth::user()->name ?>.
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">


    </section>
@endsection