<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Share;
use App\User;
use DB;

class AdminsController extends Controller
{
    public function index() {
    	return view('admin.index');
    }

    public function sections() {
    	return view('admin.sections');
    }

    public function shares() {
    	$shares = Share::with('users')->get();
    	return view('admin.shares', compact('shares'));
    }

    public function delete_share(Share $share) {
    	$share->delete();
    	return back();
    }

    public function edit_share(Share $share) {
        return view('admin.edit_share', compact('share'));
    }

    public function users() {
    	$users = User::all();
    	return view('admin.users', compact('users'));
    }

    public function edit_user(User $user) {
        return view('admin.edit_user', compact('user'));
    }

    public function delete_user(User $user) {
    	$user->delete();
    	return back();
    }

    public function update_user(Request $request, User $user) {
    	$user->name = !empty($request['name']) ? $request['name'] : $user->name;
    	$user->user_surname = !empty($request['surname']) ? $request['surname'] : $user->surname;
    	$user->email = !empty($request['email']) ? $request['email'] : $user->email;
    	$user->user_type_id = !empty($request['type']) ? $request['type'] : $user->user_type_id;

    	$user->save();

    	return back();
    }

    public function user_shares(User $user) {
        $shares = $user->shares()->get();
        return view('admin.user_shares', compact('shares'));
    }
}
