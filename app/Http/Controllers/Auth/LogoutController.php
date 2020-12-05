<?php

namespace App\Http\Auth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function destroy()
    {
        Auth::logout();

        return redirect()->route('welcome');
    }
}
