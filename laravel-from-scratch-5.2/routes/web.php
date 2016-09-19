<?php

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
    $people = ['Marko', 'Flafica', 'Macan'];
    return view('welcome', compact("people"));
    //return view('welcome', ['people' => $people]);
    //return view('welcome')->with('people', $people);
});

Route::get('about', function () {
    return view('pages.about');
});
