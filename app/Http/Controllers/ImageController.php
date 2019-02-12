<?php

namespace App\Http\Controllers;
use App\Auth;
use App\Image;
use App\Listing;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    
    public function create($id){
//    $listings = Listing::whereId($id)->first();  
   return view('user.listimage', compact('listings'));
    }
    
//        public function multi_image($picture, Request $request){
//           if($request->hasFile($picture)){
//             $filename = $request->file('pics')->getClientOriginalName();
//                
//           } 
//        }
//    
      
    public function store(Request $request){
  
  $filename = $request->file('pics')->getClientOriginalName();

   $file=pathinfo($filename,PATHINFO_FILENAME);

      $ext =$request->file('pics')->getClientOriginalExtension();

        $tostore=$file . "_" . time() . "." . $ext;

        $path =$request->file('pics')->storeAs('public/listing_image', $tostore);
        $images= new Image;
        $images->user_id =auth()->user()->id;
        $images->listing_id=$request->listing_id;
        $images->title=$request->input('title');
        $images->pics=$tostore;        
        $images->save();    
      return back()->with('success', 'Your images has been successfully');

}
}