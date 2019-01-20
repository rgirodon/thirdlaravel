<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    
    public $table = 'user';
    
    public $timestamps = false;
    
    public function contacts() {
        
        return $this->hasMany(Contact::class);
    }
    
    public function getFullName() {
        
        return $this->firstname.' '.$this->lastname;
    }
}
