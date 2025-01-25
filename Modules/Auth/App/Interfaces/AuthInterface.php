<?php

namespace Modules\Auth\Interfaces;

use Illuminate\Http\Request;

interface AuthInterface
{
    public function register(object $data);

    public function login(object $data);

    public function logout(Request $request);

    public function resetPassword(object $data);
}
