<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RequestQuote;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Env;



class RequestQuoteController extends Controller
{
    
    public function RequestQuote(Request $request)
    {
        $email = $request->input('email');
        $from=config('mail.from.address');
        Mail::to($from)->send(new RequestQuote($from,$email));

        if($request->input('sendmetoo')){
        Mail::to($email)->send(new RequestQuote($from,$email));
        }
        return redirect('/')->with('message','Complimenti! Hai richiesto un preventivo');
    }
}
