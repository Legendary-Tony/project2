<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function replyShow($id)
	{
		$posts   = Post::find($id);
		// $comments   = Comment::find($title);
		// dd($comments->id);
		$recent  = Post::orderBy('id', 'DESC')->take(5)->get();
		$sidebar = Post::orderBy('count_view', 'DESC')->take(5)->get();

		

		// dd(Session::get($blogKey));
		//dd($posts->comments);
		return view('/comments/_reply_comments', [
			'posts'   => $posts,
			'recent'  => $recent,
			'sidebar' => $sidebar,
			
			
		]);
	}

	public function store(Request $request)
	{
		$comment 		= new Comment;
		$comment->body  = $request->get('body');
		$comment->email = $request->get('email');
		$comment->user()->associate($request->user());
		$post = Post::find($request->get('post_id'));
		$post->comments()->save($comment);

		return back();
	}


	public function reply(Request $request)
	{
		//dd($request->all());
		$reply 		= new Comment;
		//dd($request->comment_id);
		$reply->body  = $request->get('body');
		$reply->email = $request->get('email');
		$reply->user()->associate($request->user());
		$reply->parent_id = $request->input('comment_id');
		//$post = Post::find($request->input('post_id') );
		$reply->save();

		return back();
	}

	
}
