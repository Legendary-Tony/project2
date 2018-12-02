<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

	public function create()
	{
		return view('passport.register');
	}

	public function store(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
			'name'  	  => ['required', 'string', 'max:255'],
			'password'    => ['required', 'string', 'min:6', 'confirmed'],
			'email'       => ['required', 'string', 'email', 'max:255', 'unique:users'],
		]);

		if ($validator->passes()) 
		{
			$user = User::create([
				'name'  	 => $request['name'],
				'email'      => $request['email'],
				'password'   =>  Hash::make($request['password']),
			]);

			auth()->login($user);
			
		}

			return response()->json(['error'=>$validator->errors()->all()]);

	}
}
