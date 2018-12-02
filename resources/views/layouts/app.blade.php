<!DOCTYPE html>
<html>
<head>
	<title>Elap's Blog</title>

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('images/admin/icon.png') }}" type="image/x-icon">

	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Quickly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	{{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script> --}}

	<!-- //for-mobile-apps -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

	<!-- Dropdown -->
	<link href="{{ asset('css/dropdown.css') }}" rel="stylesheet" type="text/css" media="all" />

	<!-- js -->
	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
{{-- <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> --}}
<!-- start-smoth-scrolling -->

@section('header')
@show
</head>
<body>
	<!-- banner-body -->
	<div class="banner-body abt">
		<div class="container">
			@include('inc.nav')
			<!-- header-bottom -->
			<div class="header-bottom">
				<div class="header-bottom-top">
					<ul>
						<li><a href="#" class="g"> </a></li>
						<li><a href="#" class="p"> </a></li>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
					</ul>
				</div>
				@section('content')
				@show				
			</div>
		</div>
	</div>
	@include('footer')
</body>
@section('footer')
@show
</html>