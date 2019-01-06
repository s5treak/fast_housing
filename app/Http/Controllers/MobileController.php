<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(count(User::whereEmail($request->email)->get())>=1){
            return response()->json([
                'status'=>501,
                'message'=>'Email address already exist, Please Enetr a Unique Address'
            ]);
        }
        else{
        $user=new User([
            'name' =>$request->name,
            'email' =>$request->email,
            'role' =>$request->role,
            'password'=>\Hash::make($request->password),
            'confirm_password'=>$request->confirm_password,
            // 'phone_no'=>$request->phone_no,
        ]);
            if ($user->save() );
            return response()->json([
                'status'=>200,
                'message'=>'You have been Successfully Registered'
            ]);
        }
    }

    public function login(Request $request)
    {
        if((\Auth::attempt(['email'=>request('email'), 'password'=>request('password')]))){

            return response()->json([
                'status'=>201,
                'message'=>'Login Was Successful, Welcome to Fast Housing'
            ]);
        } 
        else{
    return response()->json([
        'status'=>404,
        'message'=>'You do not Have an Account Yet, Please Sign up'
    ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
