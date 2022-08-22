<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show list
    public function index(){
        //  dd(request('tag'));
        $listings = Listing::all();
    return view('listings.index', compact('listings'));
      
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
    //dd($request->all());
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

    Listing::create($formInput);

    return redirect('/index');
     
  }


}

