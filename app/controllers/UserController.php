<?php

class UserController extends BaseController {

	public function login()	{
		$title = 'Log in';
		return View::make('account.login')->with('title', $title);
	}

	public function showProfile($name) {
		$user = User::with('Posts')->where('username', 'LIKE', $name)->first();
		$title = $user->username;
		return View::make('profile')->with('title', $title)->with('user', $user);
	}

}
