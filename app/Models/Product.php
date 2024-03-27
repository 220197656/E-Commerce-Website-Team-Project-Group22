<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; 
    protected $primaryKey = 'productID';

    protected $fillable = ['productName', 'categoryID', 'description', 'imageURL'];
    public $timestamps = false;
    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'productID', 'productID');
    }
    public function orderItem()
{
    return $this->belongsTo(Product::class, 'productID', 'productID');
}
public function category()
    {
        return $this->belongsTo(Categories::class, 'categoryID','categoryID');
    }
}
