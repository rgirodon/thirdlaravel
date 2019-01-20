<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller {
    
    function show(Request $request) {
        
        $nb = $request->query('nb');
        
        $array = [];
        
        for ($i = 1; $i <= $nb; $i++) {
            
            array_push($array, $i);
        }
        
        return view('array')->with('array', $array);
    }
}
