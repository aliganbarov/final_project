<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class follow_system extends Model
{
      public function users() {
    	return $this->belongsTo('App\User');
    }
     public function shares() {
        return $this->belongsTo('App\Share');
    }
}
