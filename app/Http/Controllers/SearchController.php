<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariant;

class SearchController extends Controller
{
    // public function index()
    // {
        
    //     // Retrieve products with pagination (10 products per page)
    //     $products = Product::all();
    //     \Log::debug('Number of products fetched:', ['count' => $products->count()]);
    //     // Pass the products to the view
    //     return view('search', compact('products'));
    // }

    

public function index()
{
    $products = DB::table('products')
                    ->leftJoin('productvariants', function ($join) {
                        $join->on('products.productID', '=', 'productvariants.productID')
                             ->where('productvariants.gradeID', '=', 1); // Assuming gradeID 1 is for brand new
                    })
                    ->select('products.*', 'productvariants.price as brandNewPrice')
                    ->get();

    return view('search', compact('products'));
}



// public function searchResults(Request $request)
// {
//     $query = $request->input('query', '');
//     $products = Product::where('productName', 'like', "%{$query}%")->get();
    
//     // Return a view that's just for the search results portion
//     return view('partials.search_results', compact('products'));
// }

public function searchResults(Request $request)
{
    $query = $request->input('query', '');

    $products = Product::where('productName', 'like', "%{$query}%")
                    ->get()
                    ->map(function ($product) {
                        $brandNewVariant = $product->variants()->where('gradeID', 1)->first();
                        $product->brandNewPrice = $brandNewVariant ? $brandNewVariant->price : null;
                        return $product;
                    });

    return view('partials.search_results', compact('products'));
}



}
