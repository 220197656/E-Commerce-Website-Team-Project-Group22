<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shippingaddresses extends Model
{
    use HasFactory;

    protected $table = 'shippingaddresses'; 
    protected $primaryKey = 'addressID';
}
