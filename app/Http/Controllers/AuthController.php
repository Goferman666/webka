<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
   public function auth(Request $request)
    {

         $user = User::where([['login', $request->login], ['password', $request->password]])->first();
         if (is_null($user)){
			 return "Неправильно";
		 }
		 Auth::login($user);
		 return redirect('/');
	}
	
	public function logout()
	{
		Auth::logout();
		return back()->withInput();
	}
	
	public function registration (Request $request)
	{
		$user = User::create([
		'login' => $request->login,
		'email_address' => $request->email_address,
		'password' => $request->password,
		'status' => 1
		]);
		if (is_null($user)){
			 return "Неправильно";	
		}
		return redirect('/');
	}
}
