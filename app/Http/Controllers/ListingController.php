<?php

namespace App\Http\Controllers;
use Auth;
use App\Category;
use App\Listing;
use App\User;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
	
	
//	 public function index()
//    {
//        $listings=Listing::all();
//        return view('user.post',compact('listings'));
//    }
	 public function create(Request $request){
    
         $listings = new Listing;
         $listings->user_id =auth()->user()->id;
         $listings->name = $request->input('name');
         $listings->cat_name = $request->input('cat_name');
         $listings->location = $request->input('location');
         $listings->bath = $request->input('bath');
         $listings->room = $request->input('room');
         $listings->toilet = $request->input('toilet');
         $listings->price = $request->input('price');
         $listings->duration = $request->input('duration');
          $listings->description = $request->input('description');
         
      
         $listings->save();
        return redirect('/user/listimage')->with('success', 'Your lising  has been successfully proceed with the image listing');
    }
    
    
  public function edit($id){
        $listings = Listing::whereId($id)->first();
        return view('user.listEdit',compact('listings'));
    }
    public function test(){
        return view('user.test');
    }
    
    
    public function image(){
        return view('user.listimage');
    }
     public function show()
    {
         $listings = Listing::where('user_id', Auth::user()->id)->get();
       return view('user.listing',compact('listings'));
         
    }
    
     public function delete($id)
          {

              $listing = Listing::find( $id );

              $listing->delete();

              return redirect()->back();
          }
}


