<?php

class PostsController extends \BaseController {

public function __construct()
{
    // call base controller constructor
    parent::__construct();

    // run auth filter before all methods on this controller except index and show
    $this->beforeFilter('auth', array('except' => array('index', 'show')));



    // Session::flash('errorMessage', 'Only Admins can create posts and edit anyones posts ');
}



//-----------------------------------------------

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::has("search")) 
		{
			$var = Input::get('search');
			$posts = Post::with('user')->where('title', 'LIKE', "%$var%")->paginate(4);
		} else {
				//displays all posts sorted by created at date decending
		    	$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);
				}
		
	    return View::make('posts.index')->with('posts', $posts);		
	}

//--------------------------------------------------
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.editcreate');
	}

//------------------------------------------------
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		
		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails())
		{
			// set flash data
			Session::flash('errorMesage', 'Store Failed');
			
			return Redirect::back()->withInput()->withErrors($validator);
		}
			else
			{
				// set flash data
			Session::flash('successMessage', 'Store updated');
			
			//writes new posts to table
		    $post = new Post();
		    
		    //these two lines do the same thing
		    // $post = user_id Auth::user()->id;
		    $post->user()->associate(Auth::user());
		    
		    $post->title = Input::get('title');
		    $post->body = Input::get('body');
		    $post->save();

		    if (Input::hasFile('image') && Input::file('image')->isValid())
		    {
		    	$post->addUploadedImage(Input::file('image'));
		    	$post->save();
		    }



			return Redirect::action('PostsController@index');
			}
		
	}

//-------------------------------------------
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// finds specific post with Id of 1 and echoes
	    $post = Post::find($id);
	   	return View::make('posts.show')->with('post', $post);

		// return 'show posts ' . $id;
	}

//--------------------------------------------
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
	   	return View::make('posts.editcreate')->with('post', $post);

		// return 'edits post ' . $id;
	}

//---------------------------------------------
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		// set flash data
		Session::flash('successMessage', 'Store updated');
		$post = Post::find($id);
	    $post->title = Input::get('title');
	    $post->body = Input::get('body');
	    $post->save();

	    if (Input::hasFile('image') && Input::file('image')->isValid())
		    {
		    	$post->addUploadedImage(Input::file('image'));
		    	$post->save();
		    }
		return Redirect::action('PostsController@index');
	}

//----------------------------------------------
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post deleted susessfully');
		return Redirect::action('PostsController@index');
	}


}
