<?php
use Illuminate\Support\MessageBag;
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		return View::make('pages.home');
	}


	public function login(){
		if(!Input::has('username')){
			return Redirect::back()->with('userId' , 'Username Not Present');
		}
		if(!Input::has('passwd')){
			return Redirect::back()->with('passwd' , 'Password Not Present');
		}
	

		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('passwd'))))
		{
			return Redirect::back();
		}
		else{
			return Redirect::back()->with('error' , 'Invalid UserID/Password combination');
		}

	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

	public function show_register(){
		return View::make('pages.register');
	}

	public function register(){
		$errors = array();
		if(!Input::has('username')){
			$errors['userId'] = 'Username Not Present';
		}
		if(!Input::has('name')){
			$errors['name'] = 'First Name can\'t be empty';
		}
		if(!Input::has('lname')){
			$errors['lname'] = 'Second Name can\'t be empty';
		}
		if(!Input::has('email')){
			$errors['email'] ='Email can\'t be empty';
		}
		if(!Input::has('phone')){
			$errors['phone'] = 'Phone can\'t be empty';
		}
		if(!Input::has('passwd')){
			$errors['passwd'] = 'Password can\'t be empty';
		}
		if(sizeof($errors) > 0)
			return Redirect::back()->with($errors);
		if(strlen(Input::get('passwd'))<5)
			return Redirect::back()->with('passwd' , 'Password must contain atleast 5 characters');

		$user = new User;
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('passwd'));
		$user->name = Input::get('name');
		$user->lname = Input::get('lname');
		$user->phone = Input::get('phone');
		$user->save();
		Auth::login($user);
		return Redirect::to('/');
	}

}
