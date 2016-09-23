<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
    	return $this->belongsTo('App\Author::class');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category::class');
    }
}
