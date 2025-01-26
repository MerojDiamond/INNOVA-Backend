<?php

namespace Modules\Auth\Repositories;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Interfaces\AuthInterface;

class AuthRepository implements AuthInterface
{

    public function register(object $data)
    {
        $user = User::create([
            'email' => $data->email,
            'password' => Hash::make($data->password),
        ]);

        Auth::login($user);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'User registered successfully!',
            'status' => true,
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(object $data)
    {
        if (!Auth::attempt((array)$data)) {
            return response()->json([
                'message' => 'Invalid login credentials.',
            ], 401);
        }

        $user = Auth::user();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful!',
            'status' => true,
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        event(new Logout('api', $request->user()));

        return response()->json([
            'message' => 'Logged out successfully!',
            'status' => true,
        ]);
    }

    public function resetPassword(object $data)
    {
        // TODO: Implement resetPassword() method.
    }
}
