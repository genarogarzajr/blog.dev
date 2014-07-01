<?php

class Post extends Eloquent {

	//the db table this model relates to
    protected $table = 'posts';

    //Validation rules for out model properties
    static public $rules = [
    'title' => 'required|max:100'
    ];

}