<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class AppController extends Controller
{
   

    public function terms()
    {
        return view('terms.terms');
    }

    public function termsAccept()
    {
        //dd( \Request::all() );
        return [];
    }
}
