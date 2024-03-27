<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketProductQuantity extends Model
{
    public $timestamps = false; 
    protected $fillable = ['id', 'productVariantID', 'quantity', 'price'];
    // Ensure your table name is correct if it doesn't follow Laravel's naming convention
    protected $table = 'basketproductquantity';

    public function productVariant()
{
    return $this->belongsTo(ProductVariant::class, 'productVariantID', 'id'); // Adjust the foreignKey and ownerKey if needed
}
}
