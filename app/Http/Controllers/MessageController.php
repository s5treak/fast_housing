<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show($id){

   
   $receiver = User::find($id);


   return view('user/message', compact('receiver'));


   }


   public function send(){



  }
}
