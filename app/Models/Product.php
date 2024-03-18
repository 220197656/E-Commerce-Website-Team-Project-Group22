<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; 
    protected $primaryKey = 'productID';


    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'productID', 'productID');
    }
}
