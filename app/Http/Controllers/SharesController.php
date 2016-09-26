<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

use Auth;

use App\User;

use DB;

use App\Share;

class SharesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function activity() {
        if(Auth::guest())
            return redirect()->action('UsersController@login');

    	$shares = App\Share::all();
    	return view('shares.activity', compact('shares'));
    }

    

    public function discover() {
        // if(Auth::guest())
            // return redirect()->action('UsersController@login');

        $shares = App\Share::with('users')->get();
        return view('shares.discover', compact('shares'));
    }

    public function add() {
        return Auth::guest() ? redirect()->action('UsersController@login') : view('shares.add');
    }

    public function edit(Share $share) {

        return view('shares.edit',compact('share'));
    }

     public function delete(Share $share) {

         $share->delete();
         return back();
    }

    public function update(Request $request , Share $share) {

        $allowed_extensions = ['jpg', 'png', 'gif'];
        $user = Auth::user();
        if ($request->hasFile('photo')) {
            if (in_array($request->file('photo')->getClientOriginalExtension(), $allowed_extensions)) {
                $fileName= time() . $request->file('photo')->getClientOriginalName();
                $request->file('photo')->move('storage', $fileName);

                $share->share_content = '/storage/' . $fileName;
                $share->save();
            }
        }

        
        $share->update($request->all());

        return redirect('/activity');

      
    }




    public function newFile(Request $request) {
        if(Auth::guest())
            return redirect()->action('UsersController@login');

    	//add allowed extensions here
    	$allowed_extensions = ['jpg', 'png', 'gif'];
    	$user = Auth::user();
    	if ($request->hasFile('photo')) {
    		if (in_array($request->file('photo')->getClientOriginalExtension(), $allowed_extensions)) {
    			$fileName= time() . $request->file('photo')->getClientOriginalName();
		        $request->file('photo')->move('storage', $fileName);

		   		$share = new App\Share($request->all());
		   		$share->share_content = 'storage/' . $fileName;
		   		$user->addShare($share);
    		}
    	}
        
    	return back();
   	}

    // public function upload() {
    //     if(Auth::guest())
    //         return redirect()->action('UsersController@login');
        
    //     return view('shares.cavid');
    // }

    
}
