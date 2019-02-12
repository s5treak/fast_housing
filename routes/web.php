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



Route::get('user/message', function () {
    return view('user.message');
})->middleware('user');

Route::get('user/message/{id}', 'MessageController@show')->middleware('auth');

Route::post('user/message/{id}', 'MessageController@send')->middleware('auth');

Route::get('user/settings/{id}', 'SettingsController@index')->middleware('user');
Route::post('user/settings/{id}', 'SettingsController@update')->middleware('user');

Route::get('user/post', function () {
    return view('user.post');
})->middleware('user');


Route::get('user/test', 'ListingController@test')->middleware('auth');
Route::get('user/listing/{id}', 'ListingController@delete')->name('delete');
Route::get('user/listEdit/{id}', 'ListingController@edit')->name('edit');

Route::post('user/post', 'ListingController@create')->middleware('auth')->name('create');
Route::get('user/listing', 'ListingController@show')->middleware('auth')->name('show');
Route::get('user/listimage', 'ListingController@image')->middleware('auth');

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
Route::get('user/listimage/{id}', 'ImageController@create')->middleware('auth');
Route::post('user/listimage', 'ImageController@store')->middleware('auth');

