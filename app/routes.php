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

Route::get('/', 'HomeController@home');
Route::post('login', array('before' => 'guest' , 'as' => 'login' , 'uses' => 'HomeController@login'));
Route::get('logout', array('as' => 'logout' , 'uses' => 'HomeController@logout'));
Route::get('register', array('before' => 'guest' ,'as' => 'register' , 'uses' => 'HomeController@show_register'));
Route::post('register', array('before' => 'guest' , 'as' => 'register' , 'uses' => 'HomeController@register'));
