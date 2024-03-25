<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $table = 'productVariants';
    protected $primaryKey = 'variantID';
    public $timestamps = false;

    protected $fillable = [
        'productName', 
        'categoryID', 
        'description', 
        'imageURL',
    ];
    

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'productID');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'gradeID', 'gradeID');
    }
}

