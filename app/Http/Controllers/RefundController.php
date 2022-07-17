<?php

namespace App\Http\Controllers;
use \App\Models\Refund;
use Illuminate\Http\Request;
use \App\Models\Pizza;
use Illuminate\Support\Facades\Session;

class RefundController extends Controller
{
    public function getRefund(){
        // $erreur = Session::get('erreur');
        // Session::forget('erreur');
        // $user = Auth::user();
         //on recupere la liste de tous le refunds
           $refunds = Refund::all();
           //get the refund and order by 
         $refunds = Refund::orderBy('status')->get();

         $refunds=Refund::where('status','executed')->get();
        return view('welcome', compact('refunds'));
    }

    // public function getPizza(){
    //     // $erreur = Session::get('erreur');
    //     // Session::forget('erreur');
    //     // $user = Auth::user();
    //     // //on recupere la liste de tous le mangas
    //       $pizzas = Pizza::all();
    //     //$mangas = Mangas[0]; to test debug
    //     //on affiche la liste de ces mangas
    //     // return view('welcome', ['pizzas'=>$pizzas,]);
    //     return view('welcome', compact('pizzas'));
    // }

    public function update(Request $request){
        
        return view('/createRefund');
    }

    //test the db with static variable 
    // public function store(){
    //  $redirector = 213;

    //     $refund = new Refund();
    //     $refund-> reference = request('reference');
    //     $refund-> user_id = ($redirector);
    //     $refund-> service= ('service');
    //     $refund-> phone_number= ('0620104188');
    //     $refund-> amount=  ($redirector);
    //     $refund-> status= ('status');
    //     $refund-> subject_type= ('subject');
    //      $refund-> updated_at= ("2022-06-30 15:41:29");
    //      $refund-> created_at= ("2022-06-30 15:41:29");
    //     $refund ->save();


    //      return redirect('/createRefund');
    // }

    public function store(Request $request){

        $request->validate([

      
        //   'reference'=>'required|unique:refunds'
           'reference'=>'required|unique:refunds',
           'service'=>'nullable|unique:refunds',

        ]);

//i its valid then it will proceed othrwise throw exception 
     $redirector = 213;

        $refund = new Refund();
        $refund-> reference = request('reference');
        $refund-> user_id = ($redirector);
        $refund-> service=request ('service');
        $refund-> phone_number=request ('phone_number');
        $refund-> amount= request ('amount');
        $refund-> status= request('status');
        $refund-> subject_type= request('subject');
         $refund-> updated_at= ("2022-06-30 15:41:29");
         $refund-> created_at= ("2022-06-30 15:41:29");
        $refund ->save();


         return redirect('/')->with('mssg', 'refund request received ');
    }





}
