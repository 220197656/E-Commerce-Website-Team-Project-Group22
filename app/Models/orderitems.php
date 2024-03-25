<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderitems extends Model 
{
    use HasFactory;

    protected $table = 'orderitems';

    public function order()
    {
        return $this->belongsTo(Orders::class); 
    }

   
    public function product()
    {
        
        return $this->belongsTo(Product::class, 'productID', 'productID');
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id'); // Use the actual foreign key column name
    } 
}

