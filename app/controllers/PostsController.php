<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//displays all posts
	    $posts = Post::all();
	    return View::make('posts.index')->with('posts', $posts);		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


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

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
		//writes new posts to table
	    $post = new Post();
	    $post->title = Input::get('title');
	    $post->body = Input::get('body');
	    $post->save();
		return Redirect::action('PostsController@index');
		}
		// Log::info(Input::all());
		// return Redirect::back()->withInput();
	}


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


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'edits post ' . $id;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'updates post ' . $id;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
