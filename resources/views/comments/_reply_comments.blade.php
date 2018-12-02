@foreach($comments as $comment)
<div class="comments-top-top">
	<div style="display: flex;">
		<div class="top-comment-left">
			<a href="#"><img class="img-responsive" src="{{Storage::url(Auth::user()->avatar)}}" alt=""></a>
		</div>
		<div class="top-comment-right">
			<ul>
				<li><span class="left-at"><a href="#">{{$comment->user->first_name}}</a></span></li>
				<li><span class="right-at">{{ $comment->created_at->Format('M d, Y') }} at {{ $comment->created_at->format('h:m A')}}</span></li>
				<li><a  href="#scroll"  onclick="reply( {{$comment->id}} )" class="click">REPLY</a></li><br/>		
			</ul>
			<p style="margin-left: 1.3em;">{{ $comment->body }}</p>
			@include('comments._reply_comments', ['comments' => $comment->replies])
		</div>
	</div>
	<div class="clearfix"> </div>
</div>


<div id="replyForm" style="display: none;" class="table-form">
	<form  id="scroll"   method="POST" action="{{ route('comment.reply') }}">
		<h3>Share your thought</h3>
		<small>You have to sign in before you can reply</small>
		@csrf
		<input type="hidden" class="textbox" name="comment_id" value="" id="replyer" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'comment_id';}">
		<input type="hidden" name="name" class="textbox" value="{{ Auth::user() ? Auth::user()->name : ''}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
		{{-- <input type="hidden" name="post_id" class="textbox" value="{{$posts->id}}"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'post_id';}"> --}}
		<input type="hidden" name="email" class="textbox" value="{{ Auth::user() ? Auth::user()->email : ''}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">	
		<textarea value="Message:" name="body" placeholder="Message"></textarea>	
		<input type="submit" value="Submit">
	</form>
</div>
@endforeach