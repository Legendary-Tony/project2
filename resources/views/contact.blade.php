@extends('layouts.app')

@section('content')
<!-- contact -->
<div class="contact">
	<div class="contact-left">
		<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyByLjvSYLNbx5ofmAVaDtNMzrv4p5Vu0Eo
				&q=Space+Needle,Seattle+WA" frameborder="0" style="border:0"></iframe>
	</div>
	<div class="contact-right">
		<p class="phn">+234(0)81 0006 2831</p>
		<p class="phn-bottom">GDG Uyo
			<span>Start Innovation Hub</span></p>
			<p class="lom">Start Hub is a community for developers residing in Uyo, Akwa Ibom State, Nigeria.</p>
		</div>
		<div class="clearfix"> </div>
		<div class="contact-left1">
			<h3>Contact Us With <span>Any Queston</span></h3>
			<div class="in-left">
				<form>
					<input type="text" placeholder="Your Name:" required=" ">
					<input type="text" placeholder="Phone Number:" required=" ">
					<input type="text" placeholder="E-mail:" required=" ">				
				</form>
			</div>
			<div class="in-right">
				<form>
					<textarea placeholder="Message:" required=" "></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="contact-right1">
			<h3>Find Us On <span>Social Websites</span></h3>
			<h4>We are open 24/7 <label>for any assistance and suggestion</label></h4>
			<p>..................</p>
			<ul>
				<li><a href="#" class="g1"> </a></li>
				<li><a href="#" class="p1"> </a></li>
				<li><a href="#" class="facebook1"> </a></li>
				<li><a href="#" class="twitter1"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //contact -->
	@endsection