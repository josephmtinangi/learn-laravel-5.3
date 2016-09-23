<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Book;

class Category extends Model
{
	protected $fillable = [
		'name',
		'display_name',
		'description'
	];

    public function books()
    {
    	return $this->belongsToMany(Book::class);
    }
}
