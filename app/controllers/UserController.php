<?php

class UserController extends BaseController {

	public function login()	{
		$title = 'Log in';
		return View::make('account.login')->with('title', $title);
	}

}
