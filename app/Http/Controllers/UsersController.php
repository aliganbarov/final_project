<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Share;
use App\User;

class UsersController extends Controller
{
    private $user;
    public function __construct(){

        $this->user=Auth::user();
    }
    


    public function login() {
    	return view('users.login');
    }

    public function settings() {
    	if(Auth::guest())
        return redirect()->action('UsersController@login');

    	return view('users.settings');
    }

   public function profile() {
        if(Auth::guest())

        return redirect()->action('UsersController@login');

        $shares =$this->user->shares;
        return view('users.profile', compact('shares'));
    }

    public function userP(User $user) {
        if(Auth::guest())

        return redirect()->action('UsersController@login');

        $share = $user->shares;
        return view('users.userP', compact('share','user'));
    }

    public function discover() {
        return view('users.discover');
    }

}
