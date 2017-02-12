<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminpagesController extends Controller
{
    //
public function index()
    {
        return view('adminpages.socials');
    }


}
