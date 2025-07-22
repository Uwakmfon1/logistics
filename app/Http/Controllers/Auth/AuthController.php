<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Services\Auth\AuthService;

class AuthController extends Controller
{
    public function __construct(public AuthService $authService){ }
    
    public function registerView()
    {
        return view('auth.register');
    }

    public function registerUser(RegisterUserRequest $request)
    {
        return $this->authService->register($request);
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required|email:unique',
            'password'=>'required'
        ]);

        dd($validated);
    }
}
