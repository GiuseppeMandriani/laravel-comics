<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOMEPAGE 
Route::get('/', function () {
    return view('home');
})->name('home');

// COMICS

Route::get('/comics', function () {

    // Passaggio informazioni
    // Metodo a)    importo qui tutto l'array

    // $comics = [array db]

    // dump($comics);

    // Metodo b) in config creo file dove con php avrò il return di tutto l'array

    $comics = config('comics');
    // dump($comics);


    return view('comics', ['cards' => $comics]);
})->name('comics');

// NEWS

Route::get('/news', function () {
    return view('news');
})->name('news');
