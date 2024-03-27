<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;
use App\Models\BasketProductQuantity;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function addToBasket(Request $request)
    {
        
        $quantity = $request->input('quantity', 1); 

      
        $variant = ProductVariant::findOrFail($request->input('variant_id'));
        $price = $variant->price;

       
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to add items to basket.');
        }
        $userId = Auth::id();

     
        $basketItem = BasketProductQuantity::create([
            'id' => $userId,
            'productVariantID' => $variant->variantID,
            'quantity' => $quantity,
            'price' => $price,
        ]);

        
        $basketItems = BasketProductQuantity::where('id', $userId)->get();

        return view('checkout', ['basketItems' => $basketItems]);
    }
}

