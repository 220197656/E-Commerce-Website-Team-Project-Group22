<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\categories;
use App\Models\Grade;




class ProductsController extends Controller
{
    public function index()
    {
        // Retrieve all products with their variants and the grade of each variant
        $products = Product::with(['variants.grade'])->get();
        $categories = categories::all(); // Fetch all categories

        // Pass the products to the view
        return view('admin.productsindex', compact('products','categories'));
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

public function destroy($productId)
{
    $product = Product::findOrFail($productId);

    // Delete the product and its variants
    $product->variants()->delete(); // This deletes all variants associated with the product
    $product->delete(); // This deletes the product itself

    // Redirect back with a success message
    return response()->json(['success' => 'Product and its variants have been deleted successfully.'], 200);

}

    public function store(Request $request)
    {
        \Log::info($request->all());
        // First, create the Product
        $product = new Product();
        $product->productName = $request->productName;
        $product->categoryID = $request->categoryID;
        $product->description = $request->description;
        // Assume you handle image upload separately and set $product->imageURL
        $product->save(); // Save the product to get an auto-generated ID

        if (!empty($request->variants)) {
            foreach ($request->variants as $variantData) {
                if (isset($variantData['gradeID'], $variantData['quantity'], $variantData['price'])) {
                    $variant = new ProductVariant();
                    $variant->productID = $product->productID;
                    $variant->gradeID = $variantData['gradeID']; // Directly use the gradeID from the form
                    $variant->quantity = $variantData['quantity'];
                    $variant->price = $variantData['price'];
                    $variant->save();
                } else {
                    // Handle the case where the grade isn't found
                    Log::warning('Grade not found for name: ' . $variantData['grade']);
                }
            }
        }
        

        // Redirect or return response
        return redirect()->route('admin.products.index')->with('success', 'Product and its variants have been added successfully.');
    }

}


// Check if variants are provided and not empty
        // if (!empty($request->variants)) {
        //     foreach ($request->variants as $variantData) {
        //         // Check if all necessary keys exist
        //         if (isset($variantData['grade'], $variantData['quantity'], $variantData['price'])) {
        //             // Find the gradeID based on the grade name
        //             $grade = Grade::where('gradeName', $variantData['grade'])->first();
                    
        //             if ($grade) {
        //                 $variant = new ProductVariant();
        //                 $variant->productID = $product->id; // Use the ID of the newly created Product
        //                 $variant->gradeID = $grade->id; // Use the found gradeID
        //                 $variant->quantity = $variantData['quantity'];
        //                 $variant->price = $variantData['price'];
        //                 $variant->save();
        //             } else {
        //                 // Grade not found, log this issue
        //                 Log::warning('Grade not found for name: ' . $variantData['grade']);
        //             }
        //         } else {
        //             // Not all necessary data is provided for a variant, log this issue
        //             Log::warning('Missing data for variant. Provided data: ' . json_encode($variantData));
        //         }
        //     }
        // }