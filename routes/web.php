<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\PromotionsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ProductsmainController;

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

Route::get('/productsmain', [ProductsmainController::class, 'index'])->name('allproducts');

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

//Testing

Route::get('info', function () {
    return view('info');
});
