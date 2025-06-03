@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="min-height: calc(100vh - 56px - 56px); padding: 2rem;">
    <div class="text-center mb-4 w-100" style="max-width: 400px;">
        <h1 class="text-4xl font-bold mb-4">Welcome</h1>
    </div>

    <div class="w-100" style="max-width: 400px;">
        <h2 class="visually-hidden">User Login</h2>
        <form method="POST" action="{{ route('login') }}" class="d-flex flex-column align-items-center">
            @csrf

            <div class="mb-4 w-100">
                <input id="email" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus
                    class="w-100 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('email') border-danger @enderror">
                @error('email')
                    <p class="text-danger small mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 w-100">
                <input id="password" type="password" name="password" placeholder="Password" required
                    class="w-100 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('password') border-danger @enderror">
                @error('password')
                    <p class="text-danger small mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4 text-sm w-100">
                <label class="d-flex align-items-center">
                    <input type="checkbox" name="remember" class="me-2"> Remember me
                </label>
            </div>

            <button type="submit" class="py-3 bg-black text-white rounded-lg hover:bg-gray-900 w-100">Login</button>
        </form>

        <p class="text-center text-sm text-muted mt-4">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-purple-600 hover:underline">Register here</a>
        </p>
    </div>
</div>
@endsection
