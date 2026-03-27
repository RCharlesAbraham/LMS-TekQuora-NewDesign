<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dummy dashboard.
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}
