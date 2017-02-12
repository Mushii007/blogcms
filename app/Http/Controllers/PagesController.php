<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
	public function index()
    {
        return view('pages.welcome');
    }

	public function about()
	    {
	        return view('pages.about');
	    }

	public function singlepost()
	    {
	        return view('pages.post');
	    }

    public function contact()
    {
        return view('pages.contact');
    }
}
