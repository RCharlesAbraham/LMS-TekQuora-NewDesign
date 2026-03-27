<?php

namespace App\Http\Controllers\LmsUi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user() ?? (object) [
            'name' => 'Student',
            'username' => '@Student2',
            'email' => '123@gmail.com',
            'dob' => 'Teacher',
            'phone' => '000-0000 0000',
            'country' => 'Malaysia',
        ];

        return view('main.account-new', compact('user'));
    }

    public function update(Request $request)
    {
        return back()->with('success', 'Profile updated successfully!');
    }

    public function changePassword(Request $request)
    {
        return back()->with('success', 'Password changed successfully!');
    }
}
