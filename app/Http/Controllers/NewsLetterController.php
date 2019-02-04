<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller {

    public function display() {
                
        return view('newsletter');
    }
    
    public function subscribe(Request $request) {
                       
        $this->validate($request, [
            'mail' => 'bail|required|email|unique:newsletter_subscription,mail'
        ]);
        
        $mail = $request->input('mail');
        
        DB::insert('insert into newsletter_subscription (mail) values (:mail)', ['mail' => $mail]);
        
        return view('newsletter_subscribed')->with('mail', $mail);
    }
}
