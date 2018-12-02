<div class="blog-right">
	<div class="sap_tabs">	
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			<ul class="resp-tabs-list">
				<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Popular</span></li>
				<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Recent</span></li>
				
				
				<div class="clear"></div>
				<div class="clearfix"> </div>
				<br>	
			</ul>

			<div class="resp-tabs-container">
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					@foreach ($sidebar as $sidepost)
					<div class="facts">
						<div class="tab_list">
							<a  style="max-width: 90px; height: 90px;" href="{{Storage::url($sidepost->image)}}" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img  style="max-width: 90px; height: 90px;" src="{{Storage::url($sidepost->image)}}" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="tab_list1">
							<a href="{{ route('posts.show', $sidepost->id) }}">{{$sidepost->title}}</a>
							<p>{{$sidepost->created_at->diffForHumans()}} <span>{{str_limit($sidepost->body, 30, '...')}}</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					@endforeach
				</div>
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					@foreach ($recent as $post)
					<div class="facts">
						<div class="tab_list">
							<a style="max-width: 90px; height: 90px;"  href="{{Storage::url($post->image)}}" class="b-link-stripe b-animate-go   swipebox"  title="">
							<img style="max-width: 90px; height: 90px;"  src="{{Storage::url($post->image)}}" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="tab_list1">
						<a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a>
						<p>{{$post->created_at->diffForHumans() }}<span>{{str_limit($post->body, 30, '...')}}</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				@endforeach	
			</div>
				{{-- <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
					<div class="facts">
						<div class="tab_list">
							<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/9.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="tab_list1">
							<a href="#">excepturi sint occaecati</a>
							<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="facts">
						<div class="tab_list">
							<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/10.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="tab_list1">
							<a href="#">excepturi sint occaecati</a>
							<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="facts">
						<div class="tab_list">
							<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/7.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="tab_list1">
							<a href="#">excepturi sint occaecati</a>
							<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="facts">
						<div class="tab_list">
							<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/8.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="tab_list1">
							<a href="#">excepturi sint occaecati</a>
							<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> --}}
			</div>
			<script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
				});
			</script>
			<link rel="stylesheet" href="{{ asset('css/swipebox.css') }}">
			<script src="{{ asset('js/jquery.swipebox.min.js') }}"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>
		</div>
	</div>
	<div class="newsletter">
		<h3>Subscribe To Our Newsletter</h3>
		<form>
			<input type="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
			<input type="submit" value="Send">
		</form>
	</div>
	<div class="pgs">
		<h3>Pages</h3>
		<ul>
			<li><a href="#">doloribus asperiores repellat</a></li>
			<li><a href="#">Itaque earum rerum hic tenetur</a></li>
			<li><a href="#">deserunt mollitia laborum et dolorum</a></li>
			<li><a href="#">facilis est et expedita distinctio</a></li>
			<li><a href="#">occaecati cupiditate non provident</a></li>
			<li><a href="#">deserunt mollitia laborum et dolorum</a></li>
		</ul>
	</div>
</div>