<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like_system extends Model
{


      public function user() {
    	return $this->belongsTo('App\User');
    }

      public function shares() {
    	return $this->belongsTo('App\Share','share_id');
    }


}
