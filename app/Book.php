<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
    		'title',
    		'display_title',
    		'description',
    		'published'
    ];

    public function author()
    {
    	return $this->belongsTo('App\Author::class');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category::class');
    }
}
