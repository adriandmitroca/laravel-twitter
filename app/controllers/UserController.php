<?php

class UserController extends BaseController {

	public function getSignIn()	{
		$title = 'Sign in';

			print_r('user' . Auth::user());
		
		return View::make('account.login')->with('title', $title);
	}

	public function postSignIn() {
		$validator = Validator::make(Input::all(), array(
			'username'		=>	'required',
			'password'	=>	'required'
			));
	
		if($validator->fails()) {
			return Redirect::route('account-sign-in')
					->withErrors($validator)
					->withInput();
		}

		else {
			$remember = (Input::has('remember')) ? true : false;

			/* Try to log in using email address */
			$auth = Auth::attempt(array(
				'email' => Input::get('username'),
				'password' => Input::get('password'),
				), $remember);

			if($auth) {
				return Redirect::intended('/');
			}
			else {
			/* Try to log with username */
			$auth = Auth::attempt(array(
				'username' => Input::get('username'),
				'password' => Input::get('password'),
				), $remember);

				if($auth) {
					return Redirect::intended('/');
				}
			}	
		}

		return Redirect::route('account-sign-in')->with('alert', 'Login failed. Have you entered your email and password properly?');
	}

	public function getSignOut() {
		Auth::logout();
		return Redirect::route('home');
	}
	public function showProfile($name) {
		$user = User::with('Posts')->where('username', 'LIKE', $name)->first();
		$title = $user->username;
		return View::make('profile')->with('title', $title)->with('user', $user);
	}

}
