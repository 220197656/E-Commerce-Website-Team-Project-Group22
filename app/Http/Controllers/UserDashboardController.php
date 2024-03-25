<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserDashboardController extends Controller
{
    public function index(Request $request)
{
    // Assuming you're retrieving the authenticated user and eager load related data
    $user = Auth::user()->load('orders.items', 'shippingAddresses');

    // Extract orders for easier direct access in the view, if necessary
    $orders = $user->orders;

    // Pass both the user and their orders to the view
    return view('dashboard', compact('user', 'orders'));
}
}