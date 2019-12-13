<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index(){

   	$customers  = \App\Customer::all();
        return view('customer.index' , compact('customers'));
    }



    public function create(){
        return view('customer.create');
    }

    public function store(){
        $Customer = new \App\Customer();
        $Customer->name = request('name');
        $Customer->email = request('email');
        $Customer->save();
        return redirect()->back();
    }
}
