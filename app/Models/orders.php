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
        'orderID',
        'id',
        'orderDate',
        'totalAmount',
        'shippingAddressID',
    ];

    protected $casts = [
        'orderDate' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    

    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddresses::class, 'shippingAddressID', 'addressID');
    }

    public function items()
    {
        return $this->hasMany(orderitems ::class, 'orderID', 'orderID');
    }
}
