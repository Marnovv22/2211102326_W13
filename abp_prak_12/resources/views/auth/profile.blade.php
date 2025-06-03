@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1 class="mb-4 text-dark">Profile</h1>
    <div class="card p-4 shadow-sm border border-dark rounded">
        <p class="mb-2"><strong>Name:</strong> {{ $user->name }}</p>
        <p class="mb-2"><strong>Email:</strong> {{ $user->email }}</p>
        <button class="btn btn-success mt-3">Edit Profile</button>
    </div>
</div>
@endsection
