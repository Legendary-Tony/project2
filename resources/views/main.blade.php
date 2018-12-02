@extends('layouts.app')

@section('content')

<div class="clearfix"> </div>
<!-- banner -->
<div class="banner">
	<!-- Slider-starts-Here -->
	<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
	<script>
// You can also use "$(window).load(function() {"
$(function () {
  // Slideshow 4
  $("#slider3").responsiveSlides({
  	auto: true,
  	pager: false,
  	nav: true,
  	speed: 500,
  	namespace: "callbacks",
  	before: function () {
  		$('.events').append("<li>before event fired.</li>");
  	},
  	after: function () {
  		$('.events').append("<li>after event fired.</li>");
  	}
  });

});
</script>
<!--//End-slider-script -->
<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
	<ul class="rslides" id="slider3">
		@foreach ($posts as $post)
		<li>
			<div class="banner-inf">
				<h3>{{ $post->title }}</h3>
				<p>{{ str_limit($post->body, '100', '.')}}</p>
				<a href="{{ route('posts.show', $post->id) }}">See More</a>
			</div>
		</li>
		@endforeach
	</ul>
</div>
</div>
<!-- //banner -->

<!-- blog -->

<div class="blog">
	<div class="clearfix"> </div>
	<div class="blog-left">
		<div class="legendary">Lates Post</div>

		@foreach ($posts as $post)
		<div class="blog-left-grid">
			<div class="blog-left-grid-left">
				<h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
				<p>by <span>{{ $post->user->name}}</span> | {{$post->created_at->diffForHumans()}} | 
					@foreach ($post->categories as $element)
					<span>{{ $element->name}}</span></p>
					@endforeach

				</div>
				<div class="blog-left-grid-right">
					<a href="#" class="hvr-bounce-to-bottom non">{{ countComments($post->comments) }} Comments</a>
				</div>
				<div class="clearfix"> </div>
				<a href="{{ route('posts.show', $post->id) }}"><img src="{{Storage::url($post->image)}}" alt=" " class="img-responsive" /></a>
				<p class="para">{{ str_limit($post->body, '400') }}</p>
				<div class="rd-mre">
					<a href="{{ route('posts.show', $post->id) }}" class="hvr-bounce-to-bottom quod">Read More</a>
				</div>
			</div>
		<hr>
	@endforeach					
	{{ $posts->onEachSide(1)->links("vendor.pagination.bootstrap-4")}}					
</div>
@include('inc.sidebar')
<div class="clearfix"> </div>
@endsection