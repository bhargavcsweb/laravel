<?php

namespace Horsefly\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'welcome';
    	return view('pages.index')->with('title', $title);
    }


    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
        $secvice = array(
            'title' => 'contact',
            'discription' => ['devlopment', 'design', 'seo']
        );
    	return view('pages.contact')->with($secvice);
    }
}
