@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="min-height: calc(100vh - 56px - 56px); padding: 2rem;">
    <div class="text-center mb-4 w-100" style="max-width: 400px;">
        <h1 class="text-4xl font-bold mb-4">Join</h1>
    </div>

    <div class="w-100" style="max-width: 400px;">
        <h2 class="visually-hidden">User Registration</h2>
        <form method="POST" action="{{ route('register') }}" class="d-flex flex-column align-items-center">
            @csrf

            <div class="mb-4 w-100">
                <input id="name" type="text" name="name" placeholder="Full name" value="{{ old('name') }}" required autofocus
                    class="w-100 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 @error('name') border-danger @enderror">
                @error('name')
                    <p class="text-danger small mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 w-100">
                <input id="email" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required
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

            <div class="mb-4 w-100">
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" required
                    class="w-100 px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <button type="submit" class="py-3 bg-black text-white rounded-lg hover:bg-gray-900 w-100">Register</button>
        </form>

        <p class="text-center text-sm text-muted mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="text-purple-600 hover:underline">Login here</a>
        </p>
    </div>
</div>
@endsection
