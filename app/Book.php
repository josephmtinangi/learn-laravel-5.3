<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Author;
use App\Category;

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
    	return $this->belongsTo(Author::class);
    }

    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }
}
