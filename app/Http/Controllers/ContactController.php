<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller {

    public function list() {
        
        $contacts = Contact::all();
        
        return view('contacts')->with('contacts', $contacts);
    }
}
