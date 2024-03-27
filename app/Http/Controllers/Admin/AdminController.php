<?php


// App\Http\Controllers\Admin\AdminController.php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;


class AdminController extends Controller
{
    public function dashboard()
    {
        // Check if the user is authenticated and is an admin
        if (Auth::check() && Auth::user()) {
            return view('admin'); 
        }

        // Redirect non-admin users
        return redirect('/')->with('error', 'Access denied.');
    }

    
}
