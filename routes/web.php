<?php

use App\Http\Controllers\Auth\loginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\PromotionsController;
use App\Http\Controllers\Admin\UsersController;







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

// Route for showing a specific product by ID
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

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

Route::post('/register/submit', [RegisteredUserController::class, 'store']);

Route::post('/login/submit', [loginUserController::class, 'login']);

// Admin page routes


// Routes for Admin namespace

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/users', [UsersController::class, 'index'])->name('users');

    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/products/live-search', [ProductsController::class, 'liveSearch'])->name('products.liveSearch');
    //Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
    Route::get('/promotions', [PromotionsController::class, 'index'])->name('promotions');


});





Route::get('/orders/{order}', [OrdersController::class, 'show'])->name('admin.orders.show');




/// Authentication routes with Breeze

require __DIR__.'/auth.php';

 ////////////////////////////////////////////////////////////////
 // If routing has failed display a 404 error

Route::fallback(function () {
    return response()->json(['message' => 'Resource not found'], 404);
});

//////////////////////////////////////////////////////////////////
// Test

Route::get('info', function () {
    return view('info');
});

Route::get('testproductpage', function () {
    return view('testproductpage');
});


// Route::get('RegisteredUserController.php', function () {
//     return Auth('RegisteredUserController.php');
// });

Route::get('/test', function () {
    return 'Route testing successful.';
});

