@extends('layouts.app')

@section('content')
        
    <!--Sadrzaj-->
	@if(session()->has('message'))
		<div class="alert alert-success">
			{{session()->get('message')}}
		</div>
 	@endif
    <!--background-->
	<h1 class="naslov"> <span>ABM</span> <span>R</span>ent-<span>a</span>-<span>C</span>ar </h1>
	<!--background-->
	

	<div class="bg-agile">
		<div class="left-agileits-w3layouts-img">
			<h3>What we provide you</h3>
			<ul>
				<li><span>.</span>24x7 Cab service are available</li>
				<li><span>.</span>Online booking facility</li>
				<li><span>.</span>GPS Tracking system</li>
				<li><span>.</span>Credit and debit card payment facility</li>
			</ul>
			<p>- Your destination is our goal.</p>
		</div>
		<div class="book-appointment">
			<h2>Personal Details</h2>
			<div class="book-agileinfo-form">
				{!! Form::open(['method'=>'POST', 'action'=>'RentFormaController@store']) !!}
					@if(Auth::user())
						<div class="main-agile-sectns">
							<div class="agileits-btm-spc form-text1">
								<input type="text" id="full_name" name="full_name" value="{{Auth::user()->name}}" required="">
							</div>
							<div class="agileits-btm-spc form-text2">
								<input type="text" id="phone" name="phone" value="{{Auth::user()->phone}}" required="">
							</div>
						</div>
						<div class="agileits-btm-spc form-text">
						<input type="email" id="email" name="email" value="{{Auth::user()->email}}" required="">
						</div>

					@else
							<div class="main-agile-sectns">
								<div class="agileits-btm-spc form-text1">
									<input type="text" id="full_name" name="full_name" placeholder="Full Name" required="">
								</div>
								<div class="agileits-btm-spc form-text2">
									<input type="text" id="phone" name="phone" placeholder="Phone number" required="">
								</div>
							</div>
							<div class="agileits-btm-spc form-text">
								<input type="email" id="email" name="email" placeholder="Email" required="">
							</div>
					@endif
					
					<div class="clear"></div>
					<h2 class="sub-head-w3ls">Booking Details</h2>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<label for="pickup_date">Pickup Date</label>
							<input type="date" name="pickup_date" id="pickup_date" class="form-control" placeholder="Pick-up Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<label for="pickup_date">Pickup Time</label>
							<input type="time" id="pickup_time" name="pickup_time" class="form-control" placeholder="Pick-up Time" value="">
						</div>
					</div>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<label for="dropoff_date">Dropoff Date</label>
							<input type="date" id="dropoff_date" name="dropoff_date" class="form-control" placeholder="Drop-off Date" required="">
						</div>
						<div class="agileits-btm-spc form-text2">
							<label for="dropoff_time">Dropoff Time</label>
							<input type="time" id="dropoff_time" name="dropoff_time" class="form-control" placeholder="Drop-off Time" required="">
						</div>
					</div>
					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<label for="car">Car</label>
							<select name="car" id="select-car" class="form-control">
								<option value="choose" disabled selected>Choose Your Car</option>
								<option value="Audi A3">Audi A3</option>
								<option value="BMW 320">BMW 320</option>
								<option value="VW">VW Polo</option>
								<option value="Mercedes A220">Mercedes A220</option>
							</select>
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
					<div class="clear"></div>
				{!!Form::close() !!}
			</div>
		</div>
	</div>
	<!--copyright-->
	<div class="copy-w3layouts">
		<p>&copy; 2018. ABM Rent-A-Car | All Rights Reserved | Ajdin Dzananovic, Borna Nozic, Mirsad Katica</p>
	</div>
	<!--//copyright-->
@endsection
    
    
    




