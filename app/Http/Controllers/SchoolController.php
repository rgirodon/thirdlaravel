<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    public function list() {
        
        $schools = School::all();
        
        return view('schools')->with('schools', $schools);
    }
}
