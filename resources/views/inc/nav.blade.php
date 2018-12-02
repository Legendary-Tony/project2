<!-- header -->
<div class="header">
	<div class="header-nav">
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span>E</span>lap's</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom {{ Request::path() == '/' ? 'active' : ''}}"><a href="/">Home</a></li>
					<li class="hvr-bounce-to-bottom {{ Request::path() == 'about' ? 'active' : ''}} "><a href="{{ route('about') }}">About Us</a></li>
					<li class="hvr-bounce-to-bottom {{ Request::path() == 'contact' ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact Us</a></li>
					{{-- <li class="hvr-bounce-to-bottom"><a href="Portfolio.html">Portfolio</a></li> --}}
					<li class="hvr-bounce-to-bottom"><a href="/Pages">Pages</a></li>
				</ul>
				<div class="sign-in">
					@guest
					<ul>
						<li><a href="{{ route('loginIndex') }}">{{ __('Sign In') }} </a>/</li>
						<li>						
							<a  href="{{ route('registerIndex') }}">{{ __('Register') }}</a>							
						</li>
						@else
						<div class="dropdown">
							@if (auth()->check())							
							<button class="dropbtn"><a >Hi! {{ auth()->user()->name }}</a></button>
							@endif
							<div class="dropdown-content">
								<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</div>
				</ul>
				@endguest
			</div>
		</div><!-- /.navbar-collapse -->
	</nav>
</div>

<!-- search-scripts -->
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- //search-scripts -->
</div>
<!-- //header -->