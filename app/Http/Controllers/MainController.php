<?php

namespace App\Http\Controllers;

use Analytics;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Spatie\Analytics\Period;

class MainController extends Controller
{

	public function index(){
		$recent  = Post::orderBy('id', 'DESC')->take(5)->get();
		$posts   = Post::orderBy('id', 'created_at')->paginate(3);
		$sidebar = Post::orderBy('count_view', 'DESC')->take(5)->get();
		
		return view('main', [
			'posts'   => $posts,
			'recent'  => $recent,
			'sidebar' => $sidebar
			// 'comments' => $comments
		]);
	}

	public function about(){
		return view('about');
	}

	public function contact(){
		return view('contact');
	}
}
