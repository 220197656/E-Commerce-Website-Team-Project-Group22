<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;




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

Route::get('admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('contact-us', function () {
    return view('contact-us');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('terms', function () {
    return view('terms');
});

/// Authentication routes with Breeze


require __DIR__.'/auth.php';



// Test

Route::get('info', function () {
    return view('info');
});

//Temporary dashboard for logged in clients








// Route::get('RegisteredUserController.php', function () {
//     return Auth('RegisteredUserController.php');
// });

Route::post('/register/submit', [RegisteredUserController::class, 'store']);
