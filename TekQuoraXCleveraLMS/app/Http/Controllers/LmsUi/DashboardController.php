<?php

namespace App\Http\Controllers\LmsUi;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user() ?? (object) [
            'name' => 'Student',
        ];

        $stats = [
            'mon' => 0,
            'tue' => 60,
            'wed' => 20,
            'thu' => 60,
            'fri' => 50,
            'sat' => 35,
            'sun' => 45,
            'sun_2' => 10,
        ];

        $courses = [
            ['name' => 'Maths', 'duration' => '12 hours', 'progress' => 50],
            ['name' => 'Science', 'duration' => '32 hours', 'progress' => 90],
            ['name' => 'Science', 'duration' => '32 hours', 'progress' => 100],
        ];

        return view('main.dashboard-1', compact('user', 'stats', 'courses'));
    }
}
