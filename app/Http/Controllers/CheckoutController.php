<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\ProductVariant;

// class CheckoutController extends Controller
// {
//     public function addToBasket(Request $request)
//     {
//         $variantID = $request->input('variant_id');

//         $quantity = $request->input('quantity', 1);

//         $productVariant = ProductVariant::find($variantID);

//         return view('checkout', ['item' => $productVariant]);
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;
use App\Models\BasketProductQuantity;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function addToBasket(Request $request)
    {
        // Assuming you're taking 'quantity' as an input in your form
        // You might need to adjust this according to how you're handling quantity selection
        $quantity = $request->input('quantity', 1); // Default to 1 if not provided

        // Retrieve the variant's price
        $variant = ProductVariant::findOrFail($request->input('variant_id'));
        $price = $variant->price;

        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to add items to basket.');
        }
        $userId = Auth::id();

        // Store in database
        $basketItem = BasketProductQuantity::create([
            'id' => $userId,
            'productVariantID' => $variant->variantID,
            'quantity' => $quantity,
            'price' => $price,
        ]);

        // Optionally, retrieve all basket items for this user to display on the checkout page
        $basketItems = BasketProductQuantity::where('id', $userId)->get();

        return view('checkout', ['basketItems' => $basketItems]);
    }
}

