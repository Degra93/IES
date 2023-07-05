<?php

use App\Http\Controllers\RequestQuoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/servizi', function () {
    return view('servizi');
})->name('servizi');

Route::get('/i-nostri-lavori', function () {
    return view('i-nostri-lavori');
})->name('i-nostri-lavori');

Route::get('/richiedi-preventivo', function () {
    return view('richiedi-preventivo');
})->name('richiedi-preventivo');

Route::post('/richiedi-preventivo',[RequestQuoteController::class, 'RequestQuote'])->name('request-quote');