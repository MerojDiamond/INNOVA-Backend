<?php

namespace Modules\Auth\Interfaces;

interface AuthInterface
{
    public function register(object $data);
    public function login(object $data);
    public function logout();
    public function resetPassword(object $data);
}
