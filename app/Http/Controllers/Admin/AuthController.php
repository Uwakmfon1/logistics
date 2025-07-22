<?php 

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use illuminate\Http\Request;
use App\Services\Admin\AuthService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;

class AuthController
{
    public function __construct(public AuthService $authService)
    {
    }

    public function index()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        return $this->authService->login($request);
    }

    public function forgotPassword()
    {
        return view('admin.reset-password');
    }

    public function passwordReset(Request $request)
    {
        $request->validate(['email'=>'required|email']);
        
        if(Admin::where('email', $request->input('email'))->exists()){
            return redirect()->back()->with('message', 'Submitted. Please check your email.');
        }

        return redirect()->back()->with('message','Not an Admin Email');
    }


    public function logout()
    {
      
        if(Auth::check()){
            Auth::logout();            
            return redirect()->route('home');
        }
    }
}