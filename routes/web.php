
<?php

use Illuminate\Support\Facades\Route;

// Halaman Welcome
Route::get('/', function () {

    $welcome = "WELCOME TO MY PERSONAL WEBSITE";

    return view('pages.welcome', compact('welcome'));

});

// Halaman Data Diri
Route::get('/biodata', function () {

    return view('pages.biodata');

});

// Halaman Galeri
Route::get('/galeri', function () {

    return view('pages.galeri');

});
