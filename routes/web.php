<?php

use App\Notifications\LessonPublished;

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
	$user = App\User::findOrFail(9);
	$lesson = App\Lesson::findOrFail(2);

	$user->notify(new LessonPublished($lesson));
});
