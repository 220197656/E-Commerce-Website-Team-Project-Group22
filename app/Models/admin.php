<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}

