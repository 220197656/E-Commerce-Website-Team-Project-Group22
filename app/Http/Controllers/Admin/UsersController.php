<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; 

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('admin.userindex', compact('users')); 
    }
}
