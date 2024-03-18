<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;


class OrdersController extends Controller
{
    /**
     * Display a listing of all orders.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Fetch all orders. You might want to adjust this to include related models like 'client'
        $orders = Orders::all();

        // Pass the orders to the 'ordershow' view
        return view('admin.ordersindex', compact('orders'));
    }

    public function show($orderId)
{
    $order = Orders::findOrFail($orderId); // Fetch the order by ID or fail
    // Assuming you have a view named 'admin.orders.show' for displaying order details
    return view('admin.orders.show', compact('order'));
}

}
