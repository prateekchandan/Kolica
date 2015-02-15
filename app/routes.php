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
Route::any('logout', array('before' => 'user' ,'as' => 'logout' , 'uses' => 'HomeController@logout'));
Route::get('register', array('before' => 'guest' ,'as' => 'register' , 'uses' => 'HomeController@show_register'));
Route::post('register', array('before' => 'guest' , 'as' => 'register' , 'uses' => 'HomeController@register'));


Route::get('add-product', array('before' => 'user' ,'as' => 'add' , 'uses' => 'HomeController@add_product_view'));
Route::post('add-product', array('before' => 'user' ,'as' => 'add' , 'uses' => 'HomeController@add_product'));

Route::get('category/{cat}/{subcat?}', array('as' => 'category' , 'uses' => 'HomeController@category'));
Route::get('Product/{pid}', array('as' => 'product' , 'uses' => 'HomeController@product'));


Route::any('my-products', array('before' => 'user' ,'as' => 'myproducts' , 'uses' => 'HomeController@my'));

Route::post('edit/{pid}', array('before' => 'user' ,'as' => 'edit' , 'uses' => 'HomeController@edit_save'));
Route::get('edit/{pid}', array('before' => 'user' ,'as' => 'edit' , 'uses' => 'HomeController@edit'));
