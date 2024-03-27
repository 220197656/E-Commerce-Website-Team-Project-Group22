<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    /**
     * Display the promotions page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return the view from resources/views/admin/promotionsindex.blade.php
        return view('admin.promotionsindex');
    }
}
