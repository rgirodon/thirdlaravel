<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NewsLetterSubscription;

class NewsLetterController extends Controller {

    public function display() {
                
        return view('newsletter');
    }
    
    public function subscribe(Request $request) {
                       
        $this->validate($request, [
            'mail' => 'bail|required|email'
        ]);
        
        $mail = $request->input('mail');
        
        $newsLetterSubscription = new NewsLetterSubscription();
        
        $newsLetterSubscription->mail = $mail;
        
        $newsLetterSubscription->save();
        
        return view('newsletter_subscribed')->with('mail', $mail);
    }
}
