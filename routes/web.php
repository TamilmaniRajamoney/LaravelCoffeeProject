<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\User;

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

// Route::get('/welcome','App\Http\Controllers\RefundController@getRefund');

//  Route::get('/welcome','App\Http\Controllers\RefundController@getPizza');
// Route::get('/listRefund','App\Http\Controllers\RefundController@getRefund');
// Route::get('/createRefund','App\Http\Controllers\RefundController@update');
// Route::post('/createRefund','App\Http\Controllers\RefundController@store');
// Route::get('/datatable','App\Http\Controllers\TestController@index');

// Get List of Coffees 
Route::get('/index','App\Http\Controllers\ListingController@index');

 //Get Description
Route::get('/coffeeDesc','App\Http\Controllers\TestController@getDesc');

//Show Create Form 
Route::get('/listings/create','App\Http\Controllers\ListingController@create')->middleware('auth');

//Show Edit Form 
Route::get('/listings/{listing}/edit','App\Http\Controllers\ListingController@edit')->middleware('auth');

//Delete coffee 
Route::delete('/listings/{listing}','App\Http\Controllers\ListingController@destroy')->middleware('auth');

//Update coffee
Route::put('/listings/{listing}','App\Http\Controllers\ListingController@update')->middleware('auth');

//Store
Route::post('/listings','App\Http\Controllers\ListingController@store')->middleware('auth');

//Manage Listings 
Route::get('/listings/manage','App\Http\Controllers\ListingController@manage')->middleware('auth');

//Single listing
Route::get('/listings/{listing}','App\Http\Controllers\ListingController@show');

//Show Register Form 
Route::get('/register','App\Http\Controllers\UserController@create')->middleware('guest');

//create new user 
Route::post('/users','App\Http\Controllers\UserController@store');

//Logout user  
Route::post('/logout','App\Http\Controllers\UserController@logout')->middleware('auth');

//show login form  
Route::get('/login','App\Http\Controllers\UserController@login')->name('login');

// login  
Route::post('/users/authenticate','App\Http\Controllers\UserController@authenticate');

















//test view
// Route::get('/coffeeIndex',function(){
//     return view('coffeeIndex',[
//         'heading' => 'coffee listing',
//     'listings'=>[
//         'id'=>1,
//         'title'=>'listing One',
//         'description'=> 'Lorem ipsum dolor sit amet, 
//         consectetur adipisicing elit. Voluptatum quas 
//         cum dignissimos, deserunt mollitia omnis qui architecto fugit corrupti reiciendis?'
//     ],

//     [
//         'id'=>2,
//         'title'=>'listing two',
//         'description'=> 'Lorem ipsum dolor sit amet, 
//         consectetur adipisicing elit. Voluptatum quas 
//         cum dignissimos, deserunt mollitia omnis qui architecto fugit corrupti reiciendis?'
//     ]

//     ]);

// });
























//this retuen hello world string 
Route::get('/hello',function(){
    return 'Hello world';

});

Route::get('/post/{id}',function($id){
    //die dump
    //dd($id); 
    ddd($id);
    return response('Post' . $id);

})->where('id', '[0-9]+');


Route::get('/search',function(Request $request){
    dd($request);
});