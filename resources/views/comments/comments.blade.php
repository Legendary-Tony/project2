<div class="artical-commentbox">
	<div  class="table-form">
		<form  id="commentForm" method="POST" action="{{ route('comment.store') }}">
			<h3>leave a comment</h3>
			<small>You have to sign in before you can comment</small>
			@csrf
			<input type="text" placeholder="Name" name="name" class="textbox" value="{{ Auth::user() ? Auth::user()->name : ''}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			<input type="hidden" name="post_id" class="textbox" value="{{ $posts->id }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			<input type="text" placeholder="Email" name="email" class="textbox" value="{{ Auth::user() ? Auth::user()->email : ''}}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			{{-- <input type="text" class="textbox" value="Phone number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone number';}"> --}}
			
			<textarea value="Message:" placeholder="Message" name="body" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}"></textarea>	
			<input type="submit" value="Submit">
		</form>
	</div>



</div>







