<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login()
    {
        return redirect()->route('admin.dashboard');
    }
}
