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
        'name','user_surname', 'email', 'password', 'user_type', 'username', 'user_status', 'avatar'
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

    public function like_systems()
    {
    return $this->hasMany('App\like_system');
    }

    public function follow_systems() {
        return $this->hasMany('App\follow_system');
    }


    public function addShare(Share $share) {
        $this->shares()->save($share);
        return back();
    }

    public function addlike(like_system $like_sys) {
        $this->like_systems()->save($like_sys);
        return back();
    }
}
