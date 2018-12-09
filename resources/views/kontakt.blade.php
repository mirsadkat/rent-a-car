@extends('layouts.app')

@section('content')
<div class="wthree-dot">
	<h1>Creative Contact Form</h1>
	<div class="profile">
		<div class="wrap">
			<div class="contact-form">
				<form action="#" method="post">
					<div class="w3l-contact-left">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" required="">
							<label>Name</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="text" name="Phone" required="">
							<label>Phone</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="Subject" required="">
							<label>Subject</label>
							<span></span>
						</div>
					</div>
					<div class="w3l-contact-right">
						<div class="styled-input agileits-input">
							<textarea name="Message" required=""></textarea>
							<label>Message</label>
							<span></span>
						</div>	 
						<input type="submit" value="SEND">
					</div>
					<div class="clear"> </div>
				</form>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2017 Creative Contact Form. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
</div>

@endsection


@section('css')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection