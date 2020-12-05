<?php

namespace App\Http\Auth\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Register $request)
    {
        $result = $request->validated();
    }
}
