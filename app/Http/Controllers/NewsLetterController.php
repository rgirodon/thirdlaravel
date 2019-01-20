<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsLetterController extends Controller {

    public function display() {
                
        return view('newsletter');
    }
    
    public function subscribe(Request $request) {
                       
        $this->validate($request, [
            'mail' => 'bail|required|email'
        ]);
        
        $mail = $request->input('mail');
        
        return view('newsletter_subscribed')->with('mail', $mail);
    }
}
