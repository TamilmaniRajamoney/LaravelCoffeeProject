<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
    //show list
    public function index(){
        //  dd(request('tag'));
    //     $listings = Listing::all();
    // return view('listings.index', compact('listings'));

    return view('listings.index', [
      'listings'=>  Listing::latest()->paginate(6)
    ]);
      
    }


    //show single list
    public function show(Listing $listing){
        return View('listings.show',[
            'listing'=>$listing
        ]);
    }

    // public function show(listing $listing){
    //     $listings = Listing::all();
    //     return view('listings.show', compact('listings'));
    //      }
    
//show create form 
   public function create(){
    return View('listings.create');
   }


//Store Listing data
  public function store(Request $request){
    
    // // die();
    //  dd($request->all());
    $formInput= $request->validate([
    'coffeename'=>'required',
    'title'=>'required',
    'type'=>'required',
    'category'=>'required',
    'description'=>'required',
    'email'=>'required',
    'website'=>'required',
    'location'=>'required',
    
    ]);
    
    // dd($formInput);
    if($request->hasFile('cover')){
      //Storage::disk('public')->put('covers',$request->file('cover'));
       $formInput['cover']= $request->file('cover')->store('covers','public');
      
    }

     $formInput['user_id']= auth()->id();

    Listing::create($formInput);

    return redirect('/index')->with('message', 'Brew is Ready!');
     
  }

  //Show Edit Form

  public function edit(Listing $listing){
      // dd($listing);
    return view('listings.edit',['listing'=>$listing]);

  }


  //Update coffee
  public function update(Request $request, Listing $listing){
    //make sure logged in user is owner
    if($listing->user_id != auth()->id()) {
       abort(403,'Unauthorized Action');
    }

    // // die();
    //  dd($request->all());
    $formInput= $request->validate([
    'coffeename'=>'required',
    'title'=>'required',
    'type'=>'required',
    'category'=>'required',
    'description'=>'required',
    'email'=>'required',
    'website'=>'required',
    'location'=>'required',
    ]);

    if($request->hasFile('cover')){
      //Storage::disk('public')->put('covers',$request->file('cover'));
       $formInput['cover']= $request->file('cover')->store('covers','public');
      
    }

    $listing->create($formInput);

    return redirect('/index')->with('message', 'Brew is updated!');
     
  }

//Delete coffee
  public function destroy(Listing $listing){

    if($listing->user_id != auth()->id()) {
      abort(403,'Unauthorized Action');
   }
    
      $listing->delete();
    // dd($listing);
  return redirect('index')->with('message', 'Brew deleted Successfully');

}

//relationship to user 
public function user(){
  return $this ->belongsTo(User::class,'user_id');
}

//Manage Listings
public function manage(){
  return view('listings.manage',['listings' => auth()->user()->listings()->get()]);
}



}

