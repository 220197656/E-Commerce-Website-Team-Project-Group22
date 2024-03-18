<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model 
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'orderID';
    public $timestamps = false;

    protected $fillable = [
        'clientID',
        'orderDate',
        'totalAmount',
        'shippingAddressID',
    ];

    protected $casts = [
        'orderDate' => 'datetime',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'clientID', 'clientID');
    }

    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddresses::class, 'shippingAddressID', 'addressID');
    }

    public function items()
    {
        return $this->hasMany(OrderItems::class, 'orderID', 'orderID');
    }
}
