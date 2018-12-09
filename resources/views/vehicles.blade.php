@extends('layouts.app')

@section('content')

<!-- Images used to open the lightbox -->
<h1>Gallery</h1>
    
    <div class="row red">
        <div class="col-sm-12">
            @foreach ($vehicles as $vehicle)
                <div class="col-sm-3 gal-align">
                    <a href="#">
                        <div class="thumbnail gal-thumb">
                            <img class="gal-slike" src="{{ $vehicle->slika }}" alt="" data-toggle="modal">
                            <div class="caption gal-opis">
                                <p>{{ $vehicle->marka }} {{ $vehicle->model }} {{ $vehicle->kubikaza }} {{ $vehicle->godiste }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
          <h4 class="modal-title .bg-info">BMW</h4>
          
          <img src="{{asset('images/g1.jpg')}}">
        </div>
        </div>
        
</div>
    <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
          <h4 class="modal-title">MERCEDES</h4>
          
          <img src="{{asset('images/g2.jpg')}}">
</div>
        </div>
        
</div>
    <div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
          <h4 class="modal-title"></h4>
          
          <img src="{{asset('images/g4.jpg')}}">
        </div>
        </div>
        
</div>
<div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
          <h4 class="modal-title">FERRARI</h4>
          
          <img src="{{asset('images/g5.jpg')}}">
        </div>
        </div>
        
</div>
@endsection