<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index()
    {
        // Retrieve all products with their variants and the grade of each variant
        $products = Product::with(['variants.grade'])->get();

        // Pass the products to the view
        return view('admin.productsindex', compact('products'));
    }

    // ProductController.php
    public function liveSearch(Request $request)
{
    $query = $request->get('query', '');
    
    if (!empty($query)) {
        $products = Product::where('productName', 'like', '%' . $query . '%')
                        ->with('variants.grade')
                        ->get();
    } else {
        // Return all products if no query is provided
        $products = Product::with('variants.grade')->get();
    }

    return view('admin.partials.search_results', compact('products'))->render();
}

    
    

    


}
