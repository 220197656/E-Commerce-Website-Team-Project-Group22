<?php

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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact-us', function () {
    return view('contact-us');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('login', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('register');
});

Route::get('terms-and-conditions', function () {
    return view('terms');
});

Route::get('privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('return-policy', function () {
    return view('return-policy');
});

Route::get('FAQ', function () {
    return view('FAQ');
});
