<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    public function list() {
        
        $users = DB::select('select id, firstname, lastname from user');
        
        return view('users')->with('users', $users);
    }
    
    public function show($id) {
        
        $user = DB::table('user')->where('id', $id)->first();
        
        return view('user')->with('user', $user);
    }
}
