<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script> --}}
     {{-- @vite('resources/css/app.css') --}}
     <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex items-center justify-center h-screen">

    <div class="w-full max-w-sm p-6 bg-white rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login to Your Account</h2>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-500"
                    value="{{ old('email') }}">

                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-500">

                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="form-checkbox h-4 w-4 text-blue-600">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>

                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                    Forgot password?
                </a>
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-1">
                    Login
                </button>
            </div>
        </form>

        <p class="text-sm text-center mt-6 text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign up</a>
        </p>
    </div>

</body>


</html>