<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}
	
	public function create()
	{
		return view('/passport.login');
	}

	public function store(Request $request)
	{

		$this->validate($request, [
			'email'    => 'required|email',
			'password' => 'required'
		]);

		if (auth()->attempt(request(['email', 'password'])) == false) {
			$errors = new MessageBag([
				'invalid'    => ['Invalid Email/or Password, try again.'],
			]);
			return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
		}

		return redirect()->intended('/');
	}

	public function destroy()
	{
		auth()->logout();  
		return redirect()->to('/');
	}
}
