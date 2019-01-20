<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetterSubscription;
use App\Facades\NewsLetter;

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
        
        NewsLetter::save($newsLetterSubscription);
        
        return view('newsletter_subscribed')->with('mail', $mail);
    }
}
