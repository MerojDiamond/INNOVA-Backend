<?php

namespace Modules\Auth\Http\Requests;

use App\Http\Requests\MainRequest;

class RegisterRequest extends MainRequest
{
    public function rules(): array
    {
        return [
            "email" => "required|email",
            "password" => "required|confirmed",
        ];
    }
}
