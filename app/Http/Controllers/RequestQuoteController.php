<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RequestQuote;
use Illuminate\Support\Facades\Mail;



class RequestQuoteController extends Controller
{
    
    public function RequestQuote(Request $request)
    {
        $email = $request->input('email');
       
        Mail::to('turboinferno50@hotmail.com')->send(new RequestQuote('turboinferno50@hotmail.com',$email)); //al posto di turboinf... inserite la mail configurata nel file .env

        if($request->input('sendmetoo')){
        Mail::to($email)->send(new RequestQuote('turboinferno50@hotmail.com',$email));
        }
        return redirect('/')->with('message','Complimenti! Hai richiesto un preventivo');
    }
}
