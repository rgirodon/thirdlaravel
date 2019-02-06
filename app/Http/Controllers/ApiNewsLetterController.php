<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetterSubscription;

class ApiNewsLetterController extends Controller
{
    public function list() {
        
        return NewsLetterSubscription::all();
    }
    
    public function show($id) {
        
        return NewsLetterSubscription::find($id);
    }
}
