<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller {

    function show() {
        
        // get now
        $now = date('d/m/Y H:i:s');
        
        // get past in session
        $past = session('past');
        
        // is past is empty, initialize it
        if (!isset($past)) {
            
            $past = [];
        }
        
        // add now to past
        array_push($past, $now);
        
        // set past in session
        session(['past' => $past]);
                
        // return to view
        return view('date')->with([
            'now' => $now,
            'past' => $past        
        ]);
    }
}
