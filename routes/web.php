<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/date', 'DateController@show');

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
});

Route::get('array', 'ArrayController@show');



Route::get('newsletter', 'NewsLetterController@display');

Route::post('newsletter', 'NewsLetterController@subscribe')->name('newsletter_subscribe');

Route::get('/users', 'UserController@list');

Route::get('/contacts', 'ContactController@list');

Route::get('/users/{id}', 'UserController@show');