<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketProductQuantity extends Model
{
    public $timestamps = false; 
    protected $fillable = ['id', 'productVariantID', 'quantity', 'price'];
    protected $table = 'basketproductquantity';

    public function productVariant()
{
    return $this->belongsTo(ProductVariant::class,'productVariantID', 'variantID'); 
}
}
