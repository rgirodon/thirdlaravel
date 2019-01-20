<?php
namespace App\Managers;

class NewsLetterSubscriptionManager {

    public function __construct() {
        
    }
    
    public function save($newsLetterSubscription) {
        
        $newsLetterSubscription->save();
    }
}

