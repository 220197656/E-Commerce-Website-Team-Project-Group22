<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsmainController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VariantController;
USE App\Http\Controllers\SearchController;
USE App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\CheckoutController;

//Laravel added routes

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [UserDashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Add routes here
//TODO: There are two of these? why? plus make it work
//Route::get('/productsmain', [ProductsmainController::class, 'index'])->name('allproducts');

// Route for showing a specific product by ID
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('about', function () {
    return view('about');
});

Route::post('checkout', [CheckoutController::class, 'addToBasket'])->name('checkout.addToBasket');


Route::get('userdashboard', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin.home'); 

Route::get('productsmain', function () {
    return view('productsmain');
});


Route::get('contact-us', function () {
    return view('contact-us');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('terms', function () {
    return view('terms');
});


Route::get('privacy', function () {
    return view('privacy');
});

Route::get('return', function () {
    return view('return');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('contact', function () {
    return view('contact-us');
});


Route::get('search', function () {
    return view('search');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/search-results', [SearchController::class, 'searchResults'])->name('search.results');




// TODO: Make it work
//Route::get('/productsmain', [ProductsmainController::class, 'index'])->name('allproducts');

// Grouped routes for admin with middleware applied
// Route::middleware('auth')->group(function () {
// }
// middleware(['auth', 'isAdmin'])->
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/products/live-search', [ProductsController::class, 'liveSearch'])->name('products.liveSearch');
    Route::DELETE('/products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::post('/variants/update', [VariantController::class, 'update'])->name('variant.update');
    Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
    // Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
});


Route::get('/orders/{order}', [OrdersController::class, 'show'])->name('admin.orders.show');

//Testing

Route::get('info', function () {
    return view('info');
});
