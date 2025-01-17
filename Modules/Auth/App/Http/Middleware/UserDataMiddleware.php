<?php

namespace Modules\Auth\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDataMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof JsonResponse && Auth::check()) {
            $data = $response->getData(true);

            $data['auth_data'] = ['user' => Auth::user()];

            $response->setData($data);
        }

        return $response;
    }
}
