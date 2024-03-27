<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;


    protected $table = 'grades'; 
    public $timestamps = false;

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'gradeID' , 'gradeID'); // Use the actual foreign key column name
    } 
}

