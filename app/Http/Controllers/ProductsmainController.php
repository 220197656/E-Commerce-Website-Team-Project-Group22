<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductsmainController extends Controller
{
    public function index()
    {
        $allproducts= Product::with(['variants.grade'])->get();

        return view('productsmain', compact('allproducts'));
    }

}
   