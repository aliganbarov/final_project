<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class UsersController extends Controller
{
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

    	return view('users.profile');
    }

    public function discover() {
        return view('users.discover');
    }

}
