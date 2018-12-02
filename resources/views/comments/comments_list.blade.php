@foreach ($collection as $comment)
<div class="comments-top-top">
	<div class="top-comment-left">
		<a href="#"><img class="img-responsive" src="{{ asset('images/co.png') }}" alt=""></a>
	</div>
	<div class="top-comment-right">
		<ul>
			<li><span class="left-at"><a href="#">{{$comment->user->first_name}}</a></span></li>
			<li><span class="right-at">{{ $comment->created_at->Format('M d, Y') }} at {{ $comment->created_at->format('h:m A')}}</span></li>
			<li><a class="reply" href="">REPLY</a></li><br/>
			<form method="post" action="{{ route('comment.store') }}">
				@csrf

				<input type="hidden" name="parent_id" value="{{ $comment->id }}">

				<textarea name="body"></textarea>
				<input type="submit" name="submit" value="REPLY">
			</form>
		</ul>
		<p>{{ $comment->body }}</p>
		<hr>
	</div>
	<div class="clearfix"> </div>
</div>
@endforeach