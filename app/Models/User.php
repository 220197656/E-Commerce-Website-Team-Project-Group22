<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Orders;
use App\Models\shippingaddresses;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    

    public function admin()
{
    return $this->hasOne(Admin::class, 'id', 'id');
}

    
   // App\Models\User.php

public function isAdmin()
{
    // Check if the user has an associated admin entry
    return $this->admin()->exists();
}

public function orders()
    {
        return $this->hasMany(Orders::class);
    }
    public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddresses::class, 'id');
    }

}
