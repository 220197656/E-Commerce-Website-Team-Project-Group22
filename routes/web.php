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


//Laravel added routes

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Add routes here

Route::get('/productsmain', [ProductsmainController::class, 'index'])->name('allproducts');

// Route for showing a specific product by ID
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('about', function () {
    return view('about');
});

Route::get('admin', function () {
    return view('admin');
});

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

Route::get('/productsmain', [ProductsmainController::class, 'index'])->name('allproducts');

// Grouped routes for admin with middleware applied
Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/products/live-search', [ProductsController::class, 'liveSearch'])->name('products.liveSearch');
});


Route::get('/orders/{order}', [OrdersController::class, 'show'])->name('admin.orders.show');

//Testing

Route::get('info', function () {
    return view('info');
});

use App\Http\Controllers\Admin\TestController;

Route::get('/admin/test', [TestController::class, 'index'])
    ->name('admin.test')
    ->middleware(['auth', 'isAdmin']);
