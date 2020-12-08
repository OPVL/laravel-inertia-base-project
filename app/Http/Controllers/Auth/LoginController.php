<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Login');
    }

    public function store(Login $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials, request()->get('remember'))) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back();
    }
}