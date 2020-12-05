<?php

namespace App\Http\Auth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function store()
    {
        $credentials = request()->only('email', 'password');

        if (Auth::attempt($credentials, request()->get('remember'))) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back();
    }
}
