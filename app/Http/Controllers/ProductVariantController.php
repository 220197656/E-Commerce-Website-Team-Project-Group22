<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;

class ProductController extends Controller
{
    
    public function show($id)
    {
        $product = ProductVariant::with('variants.grade')->findOrFail($id);

        return view('product', compact('product'));
    }
}
