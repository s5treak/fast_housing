<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index($id){
        
        $role = Auth::user()->role;
        $profiles = Profile::whereId($id)->first();
        
        return view('user.settings', compact('profiles', 'role'));
    }

    public function update($id, Request $request){

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
          $id = Auth::user()->id;
          $profile=Profile::find($id);
          $profile->profile_img=$filenameTostore;
          $profile->user_id=$request->input('user_id');
          $profile->first_name=$request->input('first_name');
          $profile->last_name=$request->input('last_name');
          $profile->about_me=$request->input('about_me');
          $profile->dob=$request->input('dob');
          $profile->address=$request->input('address');
          $profile->email=$request->input('email');
          $profile->phone_no=$request->input('phone_no');

        //   $profile = new Profile([
        //    'profile_img' => $filenameTostore,
        //    'user_id' => $request->user_id,
        //    'first_name' => $request->first_name,
        //    'last_name' => $request->last_name,
        //    'about_me'=>$request->about_me,
        //    'dob'=>$request->dob,
        //    'phone_no'=>$request->phone_no,
        //    'email'=>$request->email,
        //    'address'=>$request->address,
   
        //   ]);
   
          $profile->save();
          //The below is where i did the update for the role on the settings blade
           
          $name = Auth::user()->name;
          $email = Auth::user()->email;
          $pass = Auth::user()->password;
          $user=User::find($id);
          $user->role=$request->input('role');
          $user->name=$name;
          $user->email=$email;
          $user->password=$pass;

          $user->save();


        //   $user = new User([
        //       'role' =>$request->role,
        //       'name' => $name,
        //       'email' => $email,
        //       'password' => $pass,

        //   ]);

          $user->save();
          return redirect()->back()->with('success', 'Profile has been Updated'); 

    }
}
