<?php

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

public function startPage()
	{
		return View::make('temp.my-first-view');
	}






//--------------------------------------	
	public function showLogin()
	{
		return View::make('posts.login');
	}
//----------------------------------
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			Session::flash('successMessage', "Login Sucessful.");
			return Redirect::intended(action('PostsController@index'));
		}
		else
		{
			Session::flash('errorMessage', "Email or password not found.");
			return Redirect::action('HomeController@showLogin');
		}	
	}

//------------------------------
	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

//--------------------------------
	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello', ['Codeup']);
	}
//----------------------------------
	public function sayHello($name)
	{
		$data = array(
			'name' => $name
			);
	return View::make('temp.my-first-view')->with($data);
	} 
//-----------------------------
	public function resume()
	{

		return View::make('resume');
	}

//---------------------------------
	public function portfolio()
	{

		return View::make('portfolio');
	}

public function navbar()
	{

		return View::make('navbar');
	}

}
