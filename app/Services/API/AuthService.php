<?php 
namespace App\Services\API;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Repositories\API\UserRepository;

class AuthService 
{

    public function __construct(public UserRepository $repository)
    {
        
    }

    public function register(RegisterUserRequest $request)
    {
        
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['email_verified_at'] = now(); //will replace when email is verified by user
        $validated['created_at'] = now();
        $validated['created_at'] = now();

        $this->repository->create($validated);

        return response()->json([
            'status'=>'success',
            'message'=> 'successfully registered user'
        ],200);

    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated($request);
        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return response()->json(['message' => 'Invalid Login details'], 401);
        }

        // on next signin regenerate passport client id with: php artisan passport:client --personal
        // remember to delete previous oauth_... before running the new migrations
        // $token = $user->createToken('authToken')->accessToken;
    }
}