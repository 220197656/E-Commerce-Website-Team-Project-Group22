<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Show the product for the given ID.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::with('variants.grade')->findOrFail($id);

        return view('productshow', compact('product'));
    }
}
