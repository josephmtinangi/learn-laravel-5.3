<?php

use App\Notifications\PaymentReceived;

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
	$user = App\User::find(2);
    $admin = App\User::find(1);

    $admin->notify(new PaymentReceived($user));
});
