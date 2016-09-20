<?php

use App\Mail\WelcomeToJSoftwares;

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
    return view('welcome');
});

Route::get('/send-mail', function() {
	Mail::to('josephmtinangi@example.com')->send(new WelcomeToJSoftwares);
});
