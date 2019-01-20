<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

    public function index() {
        
        $message = 'Message set in the controller';
        
        return view('welcome')->with('message', $message);
    }
}
