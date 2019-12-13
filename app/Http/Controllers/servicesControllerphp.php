<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesControllerphp extends Controller
{


    public function index(){
        $ses = \App\Service::all();
        // return view('services', $ses);
        

        return View('service.index' , compact('ses'));


    }


    public function store(){
        
    	$data = request()->validate([
    		'name'=>'required | min:3'
    	]);
        $service = new \App\Service();
        $service->name = request('name');
        $service->save();
       
        return redirect()->back();

    }
      public function add_service(){
        return View('service.create');
    }
}
