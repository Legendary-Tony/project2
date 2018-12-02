@extends('layouts.app')

@section('content')
<!-- single -->
<div class="blog">
	<div class="blog-left">
		<div class="single-page-artical">
			<div class="clearfix"> </div>
			
			<div class="artical-content">
				<h3>{{ $posts->title}}</h3>
				<img class="img-responsive" src="{{Storage::url($posts->image)}}" alt=" " />
				<p>{{ $posts->body }}</p>
			</div>					
		</div>
		<div class="artical-links">
			<ul>
				<li><small> </small><span>{{ $posts->created_at->diffForHumans() }}</span></li>
				<li><a href="#"><small class="admin"> </small><span>{{ $posts->user->name}}</span></a></li>
				<li><a href="#"><small class="no"> </small><span> {{ $total_comments}} </span></a></li>
				<li><a href="#"><small class="posts"> </small><span>{{$posts->count_view}} View posts</span></a></li>
				<li><a href="{{ route('posts.show', $posts->id) }}"><small class="link"> </small><span>permalink</span></a></li>
			</ul>
		</div>
		@include('comments.comments')
		<div class="comment-grid-top">
			@if (count($posts->comments) > 0)
			<h3>Responses</h3>
			@else
			<hr>
			<h3>No comments yet. Be the first to comment!!</h3>
			@endif
			@include('comments._reply_comments', ['comments' => $posts->comments, 'post_id' => $posts->id])	
		</div>		
	</div>
</div>
@include('inc.sidebar')
<div class="clearfix"> </div>
<!-- single -->

<script>
	function reply(id){
		$("#commentForm:first-child").html($("#replyForm").show());
		$('#replyer').val(id);
	}

	var $root = $('html, body');
	$('a[href*=#]').click(function() {
		var href = $.attr(this, 'href');
		$root.animate({
			scrollTop: (($(href).offset().top >= 200 ) ? $(href).offset().top : 200)
		}, 500, function () {
			window.location.hash = href;
		});
		return false;
	});
</script>

@endsection