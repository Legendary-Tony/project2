<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
	public function index(Request $request, $id)
	{
		$posts   = Post::find($id);
		$recent  = Post::orderBy('id', 'DESC')->take(5)->get();
		$sidebar = Post::orderBy('count_view', 'DESC')->take(5)->get();
		

		$blogKey = 'blog_' . $id;

		// Check if blog session key exists
		// If not, update view_count and create session key
		if (!Session::has($blogKey)) {
			Post::where('id', $id)->increment('count_view');
			Session::put($blogKey, 1);
		}
		// dd(Session::get($blogKey));
		$total_comments = countComments($posts->comments);
		return view('/single',  [
			'posts'   => $posts,
			'recent'  => $recent,
			'sidebar' => $sidebar,
			'total_comments' => $total_comments
		]);


	}
}
