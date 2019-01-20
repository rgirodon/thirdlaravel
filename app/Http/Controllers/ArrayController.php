<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller {
    
    function show($n) {
        
        $array = [];
        
        for ($i = 1; $i <= $n; $i++) {
            
            array_push($array, $i);
        }
        
        return view('array')->with('array', $array);
    }
}
