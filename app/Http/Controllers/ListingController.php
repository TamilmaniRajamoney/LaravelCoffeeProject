<?php

namespace App\Http\Controllers;

use App\Models\Listing;
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

    if($request->hasFile('cover')){
      //Storage::disk('public')->put('covers',$request->file('cover'));
       $formInput['cover']= $request->file('cover')->store('covers','public');
      
    }

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
      $listing->delete();
    // dd($listing);
  return redirect('index')->with('message', 'Brew deleted Successfully');

}




}

