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

Route::get('/', array(
						'as' => 'home',
						'uses' => 'PostController@showTimeline'));
Route::get('login', array(
						'as' => 'account-sign-in',
						'uses' => 'UserController@getSignIn'));
Route::post('login', array(
						'as' => 'account-sign-in',
						'uses' => 'UserController@postSignIn'));
Route::get('logout', array(
						'as' => 'account-sign-out',
						'uses' => 'UserController@getSignOut'));
Route::get('timeline', array(
						'as' => 'timeline',
						'uses' => 'PostController@showTimeline'));
Route::get('post/{id}/{slug}', array(
						'as' => 'post',
						'uses' => 'PostController@showPost'));
Route::get('{name}', array(
						'as' => 'profile',
						'uses' => 'UserController@showProfile'));
Route::get('tag/{tag}', array(
						'as' => 'tag',
						'uses' => 'PostController@showTag'));
Route::post('add', array(
						'as' => 'add-post',
						'uses' => 'PostController@addPost'));