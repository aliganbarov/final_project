<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\Share;
use App\User;
use DB;

class AdminsController extends Controller
{
    public function index() {
    	return Auth::user()->user_status ? view('admin.index') : view('notfound');
    }

    public function sections() {
        return Auth::user()->user_status ? view('admin.sections') : view('notfound');
    }

    public function shares() {
    	$shares = Share::with('users')->get();
        return Auth::user()->user_status ? view('admin.shares', compact('shares')) : view('notfound');
    }

    public function delete_share(Share $share) {
    	$share->delete();
    	return back();
    }

    public function edit_share(Share $share) {
        return Auth::user()->user_status ? view('admin.edit_share', compact('share')) : view('notfound');
    }

    public function users() {
    	$users = User::all();
        return Auth::user()->user_status ? view('admin.users', compact('users')) : view('notfound');
    }

    public function edit_user(User $user) {
        return Auth::user()->user_status ? view('admin.edit_user', compact('user')) : view('notfound');
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
        return Auth::user()->user_status ? view('admin.user_shares', compact('shares')) : view('notfound');

    }

    public function make_admin(User $user) {
        $user->user_status = 1;
        $user->save();
        return back();
    }
}
