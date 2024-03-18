<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable // Extend Authenticatable if you plan to use Laravel's authentication features
{
    protected $table = 'admins'; // Explicitly define the table if it's not the plural form of the model name
    protected $primaryKey = 'adminID'; // Set the primary key

    protected $fillable = [
        'username', 
        'password', 
        'email', 
        'phoneNumber', 
        'levelOfAdmin',
    ];

    protected $hidden = [
        'password', // Hide the password from array outputs, like JSON
    ];
}
