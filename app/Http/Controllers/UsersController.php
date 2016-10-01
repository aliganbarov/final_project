<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\follow_system;
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
    	return view('users.settings');
    }

   public function profile() {

        $shares =$this->user->shares;
        
        $following = follow_system::where('user_id',Auth::user()->id)->count();
        $follower = follow_system::where('share_user_id',Auth::user()->id)->count();
        // return $shares->follow_systems;
        return view('users.profile', compact('shares','follower','following'));
    }

    public function userP(User $user) {
        if($user->id == Auth::user()->id){
            return redirect('/profile');
        }
        $share = $user->shares;
        $following = follow_system::where('user_id',$user->id)->count();
        $follower = follow_system::where('share_user_id',$user->id)->count();

        $followOrNot = follow_system::where('user_id',Auth::user()->id)->where('share_user_id',$user->id)->count();
        

        // return $shares->follow_systems;
        return view('users.userP', compact('share','user','follower','following','followOrNot','owner'));
    }

    public function discover() {
        return view('users.discover');
    }

    public function edit_profile(User $user) {
        return view('users.edit_profile', compact('user'));
    }

    public function update_profile(Request $request, User $user) {
        Auth::user()->name = !empty($request['name']) ? $request['name'] : Auth::user()->name;
        Auth::user()->user_surname = !empty($request['user_surname']) ? $request['user_surname'] : Auth::user()->user_surname;
        Auth::user()->user_type = !empty($request['user_type']) ? $request['user_type'] : Auth::user()->user_type;
        Auth::user()->email = !empty($request['email']) ? $request['email'] : Auth::user()->email;
        if (!empty($request['password'])) {
            Auth::user()->password = bcrypt($request['password']);
        }

        $allowed_extensions = ['jpg', 'png', 'gif'];
        if ($request->hasFile('avatar')) {
            if (in_array($request->file('avatar')->getClientOriginalExtension(), $allowed_extensions)) {
                $fileName = time() . $request->file('avatar')->getClientOriginalName();
                $request->file('avatar')->move('storage/avatars', $fileName);
                Auth::user()->avatar = '/storage/avatars/' . $fileName;
            }
        }



        Auth::user()->save();
        return back();
    }

}
