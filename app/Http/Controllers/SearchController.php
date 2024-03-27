<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariant;
Use App\models\Categories;

class SearchController extends Controller
{

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

public function searchResults(Request $request)
{
    $query = $request->input('query', '');
    $categoryName = $request->input('category', '');

    $productsQuery = Product::query();

    
    if (!empty($query)) {
        $productsQuery->where('productName', 'like', "%{$query}%");
    }

    
    if (!empty($categoryName)) {
        $productsQuery->whereHas('category', function ($query) use ($categoryName) {
            $query->where('categoryName', '=', $categoryName);
        });
    }

    $products = $productsQuery->get()->map(function ($product) {
        $brandNewVariant = $product->variants()->where('gradeID', 1)->first();
        $product->brandNewPrice = $brandNewVariant ? $brandNewVariant->price : null;
        return $product;
    });

    return view('partials.search_results', compact('products'));
}






}