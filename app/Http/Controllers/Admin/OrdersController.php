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
        $orders = orders::with('user')->get();

        // Temporarily inspect the first order and its related user
       //dd($orders->first()->toArray(), $orders->first()->user);

        
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
