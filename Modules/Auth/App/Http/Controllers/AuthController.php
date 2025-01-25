<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\Requests\RegisterRequest;
use Modules\Auth\Http\Requests\ResetPasswordRequest;
use Modules\Auth\Interfaces\AuthInterface;
use Modules\Auth\Repositories\AuthRepository;

class AuthController extends Controller
{
    private $repository;

    public function __construct(AuthInterface $repository)
    {
        $this->repository = $repository;
    }

    public function register(RegisterRequest $request)
    {
        return $this->repository->register((object)$request->validated());
    }

    public function login(LoginRequest $request)
    {
        return $this->repository->login((object)$request->validated());
    }

    public function logout(Request $request)
    {
        return $this->repository->logout($request);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        return $this->repository->resetPassword((object)$request->validated());
    }
}
