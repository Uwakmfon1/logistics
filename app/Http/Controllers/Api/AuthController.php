<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Services\API\AuthService;

class AuthController extends Controller
{

    public function __construct(public AuthService $authService)
    {
        
    }
    

    // 
    public function index()
    {

    }

    public function register(RegisterUserRequest $request)
    {
        return $this->authService->register($request);
    }

    public function login(LoginRequest $request)
    {
        return $this->authService->login($request);
    }
}
