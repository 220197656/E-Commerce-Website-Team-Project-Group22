<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Admin::all(); // Fetch all staff members
        return view('admin.staffindex', compact('staff')); // Pass them to the view
    }
}
