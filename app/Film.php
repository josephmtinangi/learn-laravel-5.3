<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "film";

    protected $primaryKey = "film_id";

    public $timestamps = false;

    public function actors()
    {
    	return $this->belongsToMany(Actor::class);
    }
}
