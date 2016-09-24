<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
	protected $fillable = ['share_title', 'share_description'];

    public function share_format() {
    	return $this->belongsTo('App\ShareFormat');
    }

    public function share_category() {
    	return $this->belongsTo('App\ShareCategory');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }

}
