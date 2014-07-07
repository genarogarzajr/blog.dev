<?php

class Post extends BaseModel {

	//the db table this model relates to
    protected $table = 'posts';

    //Validation rules for out model properties
    static public $rules = [
    'title' => 'required|max:100'
    ];

	public function user()
		{
		    return $this->belongsTo('User');
		}
}
?>