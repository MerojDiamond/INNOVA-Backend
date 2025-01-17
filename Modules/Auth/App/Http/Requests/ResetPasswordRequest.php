<?php

namespace Modules\Auth\Http\Requests;

use App\Http\Requests\MainRequest;

class ResetPasswordRequest extends MainRequest
{
    public function rules(): array
    {
        return [
            "email" => "required|email",
        ];
    }
}
