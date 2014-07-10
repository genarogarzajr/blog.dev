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

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::resource('posts', 'PostsController');


Route::get('/sayhello/{name}', 'HomeController@sayHello');


Route::get('resume', 'HomeController@resume');


Route::get('portfolio', 'HomeController@portfolio');

Route::get('orm-test', function () {
    
	//writes new posts to table
    // $post = new Post();
    // $post->title = "New blog Post";
    // $post->body = "ORM is easy";
    // $post->save();


    //displays all posts
    // $posts = Post::all();
    // foreach ($posts as $post) {
    // 	echo $post->title . "<br>";
    // 	echo $post->body . "<br>";
    // }

// finds specific post with Id of 1 and echoes
    // $post = Post::find(1);
    // echo $post->title . "<br>";
    // echo $post->body . "<br>"


// finds specific post with Id of 1 and deletes it
    // $post = Post::find(1);
    // $post->delete()

    
    return "ORM is awesome";
});

Route::get('navbar', 'HomeController@navbar');














// Route::get('resume', function(){
// 	return View::make('resume');
// });

// Route::get('portfolio', function(){
// 	return View::make('portfolio');
// });




// Route::get('/resume', function(){
// 	return "this is my resume";
// });

// Route::get('/portfolio', function(){
// 	return "this is my portfolio";
// });


// Route::get('/rolldice/{guess}', function($guess){	
       
// 		$random = rand(1,6);
// 		$data = array(
// 			'random' => $random,
// 			'guess'=>$guess);


		
//     	return View::make('temp.roll-dice')->with($data);    
// });
