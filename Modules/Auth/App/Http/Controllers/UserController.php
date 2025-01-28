<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\Requests\RegisterRequest;
use Modules\Auth\Http\Requests\ResetPasswordRequest;
use Modules\Auth\Interfaces\AuthInterface;
use Modules\Auth\Interfaces\UserInterface;
use Modules\Auth\Repositories\AuthRepository;

class UserController extends Controller
{
    private $repository;

    public function __construct(UserInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        return $this->repository->index($request->all());
    }
}
