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
		return $this->Category("Pocetna");
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

	public function add_product_view(){
		return View::make('pages.add_product');
	}

	public function add_product(){
		$errors = array();
		if(!Input::has('name')){
			$errors['name'] = 'Product Name Not Present';
		}
		if(!Input::has('desc')){
			$errors['desc'] = 'Please provide Description';
		}
		if(!Input::has('price')){
			$errors['price'] = 'Price can\'t be empty';
		}
		if(!Input::has('category')){
			$errors['category'] ='Category can\'t be empty';
		}
		if(!Input::has('sub-category')){
			Input::merge(array('sub-category' ,""));
		}
		if(!Input::has('email')){
			Input::merge(array('email' ,""));
		}
		if(!Input::has('phone')){
			Input::merge(array('phone' ,""));
		}
		if(!Input::hasFile('image')){
			$errors['image'] = 'Please upload image';
		}
		if(!(substr(Input::file('image')->getMimeType(), 0, 5) == 'image')) {
		    $errors['image'] = 'The file is not an Image';
		}
		if (!Input::file('image')->isValid())
		{
		    $errors['image'] = 'Invalid image';
		}
		

		if(sizeof($errors) > 0)
			return Redirect::back()->with($errors);

		$p = new Product;
		$p->name = Input::get('name');
		$p->desc = Input::get('desc');
		$p->id = Auth::user()->id;
		$p->category = Input::get('category');
		$p->sub_category = Input::get('sub-category');
		$p->email = Input::get('email');
		$p->phone = Input::get('phone');
		$p->price = Input::get('price');
		$p->save();
		$destinationPath = public_path().'/images/product';
		$pid = $p->id;
		$fileName = $p->id.'.'.Input::file('image')->getClientOriginalExtension();
		Input::file('image')->move($destinationPath, $fileName);
		$p = Product::where('product_id','=',$pid)->update(array('img'=>URL::asset('images/product/'.$fileName)));
		return Redirect::back()->with('success' , 'Product Added Successfully');

	}

	function category($cat , $subcat =""){
		$heading = "Products from ".$cat;
		if($cat == "Pocetna"){
			$products = Product::get();
			$heading = "All Products";
		}
		else if($subcat == "")
			$products = Product::where('category' , '=' , $cat)->get();
		else{
			$products = Product::where('sub_category' , '=' , $subcat)->get();
			$heading=" Products from  ".$subcat." in ".$cat;
		}

		View::share("heading" ,$heading);
		View::share("products" ,$products);

		return View::make('pages.products');
	}

	function product($pid){
		$p = Product::where('product_id',  '=' , $pid)->first();
		View::share('p',$p);
		return View::make('pages.product');
	}

	function edit($pid){
		$p = Product::where('product_id',  '=' , $pid)->first();
		if(is_null($p))
			return Redirect::to('/');
		if($p->id != Auth::user()->id)
			return Redirect::to('/');

		View::share('p',$p);
		return View::make('pages.edit');
	}

	function edit_save($pid){
		$p = Product::where('id' , '=' , Auth::user()->id)->first();
		

		if(is_null($p))
			return Redirect::to('/');
		if($p->id != Auth::user()->id)
			return Redirect::to('/');

		$errors = array();
		if(!Input::has('name')){
			$errors['name'] = 'Product Name Not Present';
		}
		if(!Input::has('desc')){
			$errors['desc'] = 'Please provide Description';
		}
		if(!Input::has('price')){
			$errors['price'] = 'Price can\'t be empty';
		}
		if(!Input::has('category')){
			$errors['category'] ='Category can\'t be empty';
		}
		if(!Input::has('sub-category')){
			Input::merge(array('sub-category' ,""));
		}
		if(!Input::has('email')){
			Input::merge(array('email' ,""));
		}
		if(!Input::has('phone')){
			Input::merge(array('phone' ,""));
		}
		if(Input::hasFile('image')){
			if(!(substr(Input::file('image')->getMimeType(), 0, 5) == 'image')) {
		    $errors['image'] = 'The file is not an Image';
			}
			if (!Input::file('image')->isValid())
			{
			    $errors['image'] = 'Invalid image';
			}
		}

		if(sizeof($errors) > 0)
			return Redirect::back()->with($errors);

		Product::where('product_id','=',$pid)->update(array(
			'name' => Input::get('name'),
			'desc' => Input::get('desc'),
			'category' => Input::get('category'),
			'sub_category' => Input::get('sub-category'),
			'email' => Input::get('email'),
			'phone' => Input::get('phone'),
			'price' => Input::get('price'),
		));


		if(Input::hasFile('image')){
			$destinationPath = public_path().'/images/product';
			$pid = $p->product_id;
			$fileName = $pid.'.'.Input::file('image')->getClientOriginalExtension();
			Input::file('image')->move($destinationPath, $fileName);
			$p = Product::where('product_id','=',$pid)->update(array('img'=>URL::asset('images/product/'.$fileName)));
		}
		return Redirect::back()->with('success' , 'Product Edited Successfully');

	}

	function my(){
		$p = Product::where('id' , '=' , Auth::user()->id)->get();
		View::share('p1',$p);
		return View::make('pages.myproduct');
	}

	function delete($pid){
		$p = Product::where('product_id','=',$pid)->delete();
		return Redirect::route('myproducts');
	}
}
