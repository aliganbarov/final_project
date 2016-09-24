<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_types() {
        return $this->belongsTo('App\UserType');
    }

    public function shares() {
        return $this->hasMany('App\Share');
    }

    public function addShare(Share $share) {
        $this->shares()->save($share);
        return back();
    }
}
