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

Route::get('/number/{n}', function($n) {
    
    $result = '';
    
    if ($n%2 == 0) {
        
        $result = 'Pair !';
    }
    else {
        
        $result = 'Impair !';
    }
    
    return $result;
});

Route::get('/date', function () {
    return view('date');
});

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
});
