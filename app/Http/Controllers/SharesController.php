<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

use Auth;

use App\User;

use App\follow_system;

use DB;

use App\Share;

use App\like_system;

use Validator;

class SharesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function like(Request $request) {

        $liked = App\like_system::where('share_id',$request->share_id)->where('user_id',Auth::User()->id)->get();
        
        $share = App\Share::find($request->share_id);
         

        if(!count($liked)){
           
            $like = new App\like_system;
            $like->user_id=Auth::User()->id;            
            $share->like_systems()->save($like);
        }
        else{
            $liked[0]->delete();
        }
      
        
        return redirect('/activity');

            
        
        
    }

    public function follow(Request $request) {

            $follows = App\follow_system::where('user_id',$request->user_id)->get();
            
            
            $user = App\User::find($request->user_id);
            if (!count($follows)) {

                $follow = new App\follow_system;
                $follow->user_id=Auth::User()->id;            
                $user->follow_systems()->save($follow);
               
            }else{
                $follows[0]->delete();
            }
            

            return back();
            
           

            
        
        
    }

    public function activity() {
        if(Auth::guest())
            return redirect()->action('UsersController@login');

    	 $shares = App\Share::all();

    	return view('shares.activity', compact('shares'));
    }

    

    public function discover() {
        if(Auth::guest())
            return redirect()->action('UsersController@login');

        $shares = App\Share::with('users')->get();
        return view('shares.discover', compact('shares'));
    }


    

    public function add() {

        return Auth::guest() ? redirect()->action('UsersController@login') : view('shares.add');
    }

    public function edit(Share $share) {
         // if(Auth::guest())
         //    return redirect()->action('SharesController@activity');

        return view('shares.edit',compact('share'));
    }

     public function delete(Share $share) {
        

         $share->delete();
         return back();
    }

    public function update(Request $request , Share $share) {

        $allowed_extensions = ['jpg', 'png', 'gif','mp3'];
        $user = Auth::user();
        if ($request->hasFile('file')) {
            if (in_array($request->file('file')->getClientOriginalExtension(), $allowed_extensions)) {
                $fileName= time() . $request->file('file')->getClientOriginalName();
                $request->file('file')->move('storage', $fileName);

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
            $this->validate($request, [
                'share_title' => 'required|max:255',
                'share_description' => 'required',
                'file'=>'required',
                 ]);
    	//add allowed extensions here
    	$allowed_extensions = ['jpg', 'png', 'gif','mp3'];
    	$user = Auth::user();
    	if ($request->hasFile('file')) {
    		if (in_array($request->file('file')->getClientOriginalExtension(), $allowed_extensions)) {
    			$fileName= time() . $request->file('file')->getClientOriginalName();
		        $request->file('file')->move('storage', $fileName);

		   		$share = new App\Share($request->all());
		   		$share->share_content = '/storage/' . $fileName;
		   		$user->addShare($share);

    		}
    	}
        
    	return back();
   	}
}
