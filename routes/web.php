<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/properties', function () {
    return view('properties');
});

Auth::routes();


Auth::routes(['verify' => true]);



Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/dashboard', 'AdminController@index')->middleware('admin');

Route::get('user/dashboard', 'UserController@index')->middleware('user');

Route::get('user/chat', 'MessageController@chat')->middleware('user');


Route::get('user/message/{id}', 'MessageController@show')->middleware('auth');

Route::post('user/message/{id}', 'MessageController@send')->middleware('auth')->name('message');

Route::get('user/settings/{id}', 'SettingsController@index')->middleware('user');
Route::post('user/settings/{id}', 'SettingsController@update')->middleware('user');

Route::get('user/post', function () {
    return view('user.post');
})->middleware('user');


Route::get('user/listing', function () {
    return view('user.listing');
})->middleware('user');


Route::get('user/approved', function () {
    return view('user.approved');
})->middleware('user');


Route::get('user/bookmark', function () {
    return view('user.bookmark');
})->middleware('user');

Route::get('user/profile', 'ProfileController@index');

Route::post('user/profile', 'ProfileController@create');

//Route::get('user/view', 'ProfileController@view')->middleware('auth');


//Route for Paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('/user/payment', 'PaymentController@makePayment');

// function(){
//     return view('/user/pay')->middleware('user');
// });
