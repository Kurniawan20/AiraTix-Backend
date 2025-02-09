<?php

namespace HiEvents\Http\Request\Auth\Buyer;

use HiEvents\Http\Request\BaseRequest;

class LoginBuyerRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }
}
