<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\User;
use App\Message;

class MessageController extends Controller
{

    public function chat(){

        $users = User::all();


        return view('user/chat', compact('users'));

    }    

    public function show($id){

   
   $receiver = User::find($id);
   //sender_id used here was the name used to create the relationship and create table in the databae and the models of App\Message and App\User
   $messages = Message::where('sender_id', $id)->orWhere('receiver_id', $id)->get();
   $receiver=User::whereId($id)->first();
   $users = User::all();
   $profile = Profile::all();


   return view('user/message', compact('receiver', 'profile', 'messages', 'users'));


   }


   public function send(Request $request){
    

    $this->validate($request, [
      'message' => 'required|string',
   ]);
 
    $id=Auth::user()->id;
    $message = new Message([

    'message'=>$request->message,
    'sender_id'=>Auth::user()->id,
    'receiver_id'=>$request->receiver_id

    ]);

    
    if($message->save()){
        return redirect()->back()->with('status','Your message is sent');
    }else{
        return redirect()->back()->with('status','message sending failed');
    }
          


  }
}
