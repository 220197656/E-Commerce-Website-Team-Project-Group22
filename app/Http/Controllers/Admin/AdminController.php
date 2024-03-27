<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;


class AdminController extends Controller
{
    // public function dashboard()
    // {
    //     // Check if the user is authenticated and is an admin
    //     if (Auth::check() && Auth::user()) {
    //         return view('admin'); 
    //     }

    //     // Redirect non-admin users
    //     return redirect('/')->with('error', 'Access denied.');
    // }

    public function dashboard()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $userId = Auth::user()->id;
            // Check if the authenticated user is an admin
            $isAdmin = Admin::where('id', $userId)->first();
            
            if ($isAdmin) {

                // User is an admin, so show the admin dashboard
                return view('admin'); 
            } else {
                // User is not an admin
                return redirect('/')->with('error', 'Access denied.');
            }
        }

        // User is not authenticated
        return redirect('login')->with('error', 'Please login to access the admin dashboard.');
    }


}
