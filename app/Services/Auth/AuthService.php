<?php 
namespace App\Services\Auth;

use App\Http\Requests\LoginRequest;
use App\Repositories\API\UserRepository;
use App\Http\Requests\RegisterUserRequest;

class AuthService 
{
    public function __construct(public UserRepository $userRepository){}

    
    public function register(RegisterUserRequest $request)
    {
        // dd($request);

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        
        return $this->userRepository->create($validated);
    }


    public function login(LoginRequest $request)
    {

    }
}