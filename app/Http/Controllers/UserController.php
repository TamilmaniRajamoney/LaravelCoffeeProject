<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show register form  
    public function create(){
        return view('users.register');

    }

//Store User data
public function store(Request $request){
    
    // // die();
    //  dd($request->all());
    $formInput= $request->validate([
    'name'=>['required','min:3'],
    'email'=>['required','email',Rule::unique('users','email')],
    'password'=>['required','confirmed','min:6'],
    //'password_confirmation'=>'required',
    
    ]);
    //Hash password
    $formInput['password']= bcrypt ($formInput['password']);

    //Create User 
    $user = User::create($formInput);

    //Login
    auth()->login($user);
    
    return redirect('/index')->with('message', 'Brew Master is Created ^^ !');
     
  }

  //Logout user 
public function logout(Request $request){
    auth()->logout();
    $request->session()->invalidate();
     $request->session()->flush();

    return redirect('/index')->with('message','You have been logged out!');

  }
//user login
public function login(){
  return view('users.login');
}

//Authenticate
public function authenticate(Request $request){
  $formInput = $request->validate([
    'email'=>['required','email'],
    'password'=>['required']
  ]);
    //  dd($request->all());

if(auth()->attempt($formInput)){
  $request->session()->regenerate();

return redirect('/index')->with('message','You are logged in!');
}
return back()->withErrors(['email'=>'Invalid'])->onlyInput();

}

//relationship with Listings 
public function listings(){
  return $this ->hasMany(Listing::class,'user_id');
}

}
