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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/date', function () {
    return view('date');
});

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
});

Route::get('array/{n}', function($n) {
    
    $array = [];
    
    for ($i = 1; $i <= $n; $i++) {
        
        array_push($array, $i);
    }
    
    return view('array')->with('array', $array);
});
