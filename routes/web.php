<?php

use App\Notifications\SubscriptionCanceled;
					  

Auth::loginUsingId(1);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    
	Auth::user()->notify(new SubscriptionCanceled);
    // return view('welcome');
});
