<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPassword extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email:rfc,dns',
            // 'captcha' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'email.email' => 'A valid email is required.',
            // 'captcha' => 'Captcha is required.'
        ];
    }
}
