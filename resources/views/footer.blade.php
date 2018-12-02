<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-3 footer-grid">
				<h3>About The Author</h3>
				<div class="footer-grd-left">
					<img src="images/11.jpg" class="img-responsive" alt=" " />
				</div>
				<div class="footer-grd-left">
					<p>Hey! I'm legendary, a backend Dev at Start Innovation Hub...
					Am trying to check if I can figure what I will use this site and do.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>Important Links</h3>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/register">Register</a></li>
					<li><a href="/login">Login</a></li>
					<li><a href="{{ route('about') }}">About Us</a></li>
					<li><a href="{{ route('contact') }}">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>Categories</h3>
				<ul>
					<li><a href="#">University</a></li>
					<li><a href="#">Polytechnic</a></li>
					<li><a href="#">College of Education</a></li>
					<li><a href="#">NYSC</a></li>
					<li><a href="#">Scholarship</a></li>
					
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>Map</h3>
				<iframe
				width="260"
				height="260"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyByLjvSYLNbx5ofmAVaDtNMzrv4p5Vu0Eo
				&q=Space+Needle,Seattle+WA" allowfullscreen>
			</iframe>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<div class="footer-bottom">
	<div class="container">
		<p>Elap's © 2018 All rights reserved </p>
	</div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="{{ asset('js/bootstrap.js') }}"> </script>
<!-- //for bootstrap working -->