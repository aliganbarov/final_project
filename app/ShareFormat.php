<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareFormat extends Model
{
     public function shares() {
        return $this->hasMany('App\Share');
    } 
}
