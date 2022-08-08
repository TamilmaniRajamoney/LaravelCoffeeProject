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
    // public function show(Listing $listing){
    //     return View('listings.show',[
    //         'listing'=>$listing
    //     ]);
    // }

    public function show(listing $listing){
        $listings = Listing::all();
        return view('listings.show', compact('listings'));
          
                
        
         }


}
