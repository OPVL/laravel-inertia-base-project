<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Register extends FormRequest
{
    public function authorize(): bool
    {
        if (Auth::user() !== null)
            return false;

        return true;
    }

    public function rules(): array
    {
        return [
            'firstname' => 'required|string',
            'surname' => 'nullable|string',
            'email' => 'email|unique:users,email',
            'password' => 'required|string|min:8',
        ];
    }
}
