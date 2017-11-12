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
        $loggedUser = \Auth::user();
        if( !is_null( \Request::get('acceptTerms')) ){
            $loggedUser->terms = true;
            $loggedUser->save();
            return redirect()->home();
        }
        return redirect()->back()->with('error', 'Por favor aceitar os termos de uso!');
    }
}
