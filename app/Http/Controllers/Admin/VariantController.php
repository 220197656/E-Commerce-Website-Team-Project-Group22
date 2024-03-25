<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductVariant;

class VariantController extends Controller
{
        public function update(Request $request) 
    {
        $variant = ProductVariant::findOrFail($request->variantID);
        $variant->quantity = $request->quantity;
        $variant->price = $request->price;
        $variant->save();

        return back()->with('success', 'Variant updated successfully.');
    }

}
