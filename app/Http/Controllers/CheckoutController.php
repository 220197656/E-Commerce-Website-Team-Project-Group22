<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;

class CheckoutController extends Controller
{
    public function addToBasket(Request $request)
    {
        $variantID = $request->input('variant_id');

        $productVariant = ProductVariant::find($variantID);

        return view('checkout', ['item' => $productVariant]);
    }
}
