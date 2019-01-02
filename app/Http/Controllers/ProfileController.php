<?php

namespace App\Http\Controllers;
use Auth;
use App\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()

    {
        $this->middleware(['auth','user','verified']);

    }
    
    public function create(Request $request){
   
        $this->validate($request, [
         'profile_img'=> 'required',
         'first_name' => 'required|string',
         'last_name' => 'required|string',
         'phone_no' => 'required|string',
          'email' => 'required|string',
            'address' => 'required|string',
           'about_me' => 'required|string',
          'dob' => 'required|string',
         ]);

         //The below gets the file name and the extension details
        $filenameWithExt = $request->file('profile_img')->getClientOriginalName();
        //Get file name with extension
      

       //Get just the file name without extension
       $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       
       //the below gets the file path or extension after making a request from profile_img
       $extension = $request->file('profile_img')->getClientOriginalExtension();
        
       //Note that you make a $request to get the file name with extension and also just the extension
       //this variables stores the details of the image that will be stored in the database
       $filenameTostore = $filename."_" .time().".".$extension;
     
       //this is the path that will store the image in the public folder
     
       $path = $request->file('profile_img')->storeAs('public/profile_image', $filenameTostore);
       
       $profile = new Profile([
        'profile_img' => $filenameTostore,
        'user_id' => $request->user_id,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'about_me'=>$request->about_me,
        'dob'=>$request->dob,
        'phone_no'=>$request->phone_no,
        'email'=>$request->email,
        'address'=>$request->address,

       ]);

       $profile->save();
       return redirect()->back()->with('success', 'Profile has been Created'); 
    }

    public function index(){
        $id = Auth::user()->id;
        $user = Auth::user()->profile;
        $profiles = Profile::where('user_id', $id)->get();
        return view('user.profile', compact('profiles', 'user'));
    }

    
}
