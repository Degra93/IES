<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RequestQuote;
use Illuminate\Support\Facades\Mail;

class RequestQuoteController extends Controller
{
    public function RequestQuote($email='turboinferno50@hotmail.com')
    {
        Mail::to('stefanociangola@katamail.com')->send(new RequestQuote($email));
        return redirect('/')->with('success','Complimenti! Hai richiesto un preventivo');
    }
}
