<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register;
use Illuminate\Contracts\View\View;

class RegistrationController extends Controller
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
