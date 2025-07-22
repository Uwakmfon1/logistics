<?php 
namespace App\Services\Admin;

use App\Http\Requests\Admin\LoginRequest;
use Http\Facades\Request;


class AuthService 
{
    public function login(LoginRequest $request)
    {
        $validator = $request->validated();
        
        if($validator->fails()){
            return back()->withErrors([
                'message'=>'Invalid Login Credentials'
            ]);
        }
        return view('admin.dashboard');

    }

    // public function 
}