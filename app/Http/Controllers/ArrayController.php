<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller {
    
    function show() {
        
        return view('array');
    }
    
    function buildJson($n) {
        
        $array = [];
        
        for ($i = 0; $i <= $n; $i++) {
            
            array_push($array, $i);
        }
        
        return response()->json(['numbers' => $array]);
    }
}
