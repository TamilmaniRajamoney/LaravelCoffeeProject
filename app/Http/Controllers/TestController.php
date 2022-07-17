<?php

namespace App\Http\Controllers;
use\App\Models\Testdatatable;
use Illuminate\Http\Request;
use App\DataTables\TestsDataTable;
use\App\Models\Listing;

class TestController extends Controller
{
    
public function index(TestsDataTable $dataTable){
    return $dataTable->render('datatable');
}


public function getListing(){

    $listings = Listing::all();
    return view('listing', compact('listings'));
    

}

public function getDesc(){

    $listings = Listing::all();
    return view('coffeeDesc', compact('listings'));
    

}

}
