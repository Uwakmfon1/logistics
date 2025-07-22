<?php 
namespace App\Services\Admin;

use App\Models\Admin;
use Http\Facades\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\Admin\ResetPasswordRequest;
use Illuminate\Support\Facades\Auth;


class AuthService 
{
    public function login(LoginRequest $request)
    {
        $validator = $request->validated();
        
        $admin = Admin::where('email', $validator['email'])->first();
        if (! $admin || ! Hash::check($validator['password'], $admin->password)) {
           return redirect()->back()->with('error','Invalid login details');
        }

        return view('admin.dashboard');
    }


    public function resetPassword(ResetPasswordRequest $request)
    {

    }
}