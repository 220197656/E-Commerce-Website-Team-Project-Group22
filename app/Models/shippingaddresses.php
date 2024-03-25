<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shippingaddresses extends Model
{
    use HasFactory;

    protected $table = 'shippingaddresses'; 
    protected $primaryKey = 'addressID';

    public function user()
{
    // Explicitly specify 'id' as the foreign key and 'addressID' as the local key
    return $this->belongsTo(User::class, 'id', 'id');
}
}


