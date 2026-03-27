<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display the staff dummy dashboard.
     */
    public function index()
    {
        return view('staff.dashboard');
    }
}
