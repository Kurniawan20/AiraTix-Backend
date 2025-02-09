<?php

namespace HiEvents\Http\Request\Auth\Buyer;

use HiEvents\Http\Request\BaseRequest;
use Illuminate\Validation\Rules\Password;

class RegisterBuyerRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:buyers'],
            'phone' => ['nullable', 'string', 'unique:buyers,phone'], 
            'password' => ['required', 'string', 'min:8', 'confirmed'], 
            'password_confirmation' => ['required', 'string'], 
        ];
    }

    public function messages(): array
    {
        return [
            'email.unique' => 'This email is already registered.',
            'phone.unique' => 'This phone number is already registered.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
