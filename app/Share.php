<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
	protected $fillable = ['share_title', 'share_description', 'share_content'];

    public function share_formats() {
    	return $this->belongsTo('App\ShareFormat');
    }

    public function share_categories() {
    	return $this->belongsTo('App\ShareCategory');
    }

    public function users() {
    	return $this->belongsTo('App\User','user_id');
    }

     public function like_systems() {
        return $this->hasMany('App\like_system');
    }

}
