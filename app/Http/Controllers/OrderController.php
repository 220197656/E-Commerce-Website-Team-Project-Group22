<?php

namespace App\Http\Controllers;

use App\Models\orderitems;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    $orders = Orders::all(); 
    return view('orders.index', compact('orders'));

    }
    
}
