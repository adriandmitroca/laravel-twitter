<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PostController@showTimeline');

Route::get('log-in', array(
						'as' => 'account-log-in',
						'uses' => 'UserController@login'));

Route::get('timeline', array(
						'as' => 'timeline',
						'uses' => 'PostController@showTimeline'));

Route::get('post/{id}/{slug}', array(
						'as' => 'post',
						'uses' => 'PostController@showPost'));