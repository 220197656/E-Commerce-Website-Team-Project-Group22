<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class StaffController extends Controller
{
    public function index()
    {
        // Fetch all admins and eager load the associated user
        $admins = Admin::with('user')->get();

        return view('admin.staffindex', compact('admins')); // Pass them to the view
    }
}

