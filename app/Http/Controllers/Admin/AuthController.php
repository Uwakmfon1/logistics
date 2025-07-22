<?php 

namespace App\Http\Controllers\Admin;


use App\Services\Admin\AuthService;

class AuthController
{
    public function __construct(public AuthService $authService)
    {
        
    }

    public function index()
    {
        return view('admin.login');
    }

    public function login()
    {
        return $this->authService->login();
    }


}