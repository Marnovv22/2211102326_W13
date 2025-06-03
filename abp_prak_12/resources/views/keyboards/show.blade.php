@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-md-6">
            @if($keyboard->image_url)
                <img src="{{ asset($keyboard->image_url) }}" alt="{{ $keyboard->name }}" class="img-fluid rounded">
            @else
                <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No Image" class="img-fluid rounded">
            @endif
        </div>
        <div class="col-md-6">
            <h1 class="mb-3">{{ $keyboard->name }}</h1>
            <p class="text-muted">$ {{ number_format($keyboard->price, 2) }}</p>
            <p>{{ $keyboard->description }}</p>
            <a href="{{ route('keyboards.index') }}" class="btn btn-secondary mt-3">Back to Catalog</a>
            <button class="btn btn-primary mt-3 ms-2">Buy Now</button>
        </div>
    </div>
</div>
@endsection
