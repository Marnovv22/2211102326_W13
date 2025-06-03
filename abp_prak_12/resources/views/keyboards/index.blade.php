    @extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-purple-600 to-pink-500 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-black">Discover Your Perfect Keyboard</h1>
            <p class="text-lg mb-6 text-black">Mechanical, wireless, RGB — temukan keyboard terbaik untuk kebutuhan kerja atau gaming kamu!</p>

        </div>
    </div>
</section>

<!-- Recommendation Section -->
<section id="recommendations" class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($keyboards as $index => $keyboard)
                <div class="col">
                    <div class="card h-100 text-center shadow-sm">
                        <a href="{{ route('keyboards.show', $keyboard->id) }}" class="text-decoration-none text-dark">
                            <div class="card-body">
                                <div class="mb-3">
                                    @if($index == 0)
                                        <img src="https://mechaland.id/cdn/shop/files/IMG_6516_400x.jpg?v=1730636833" alt="{{ $keyboard->name }}" class="img-fluid mx-auto d-block" style="max-height: 80px;">
                                    @elseif($index == 1)
                                        <img src="https://mechaland.id/cdn/shop/files/sj2_0001_400x.jpg?v=1736252668" alt="{{ $keyboard->name }}" class="img-fluid mx-auto d-block" style="max-height: 80px;">
                                    @elseif($index == 2)
                                        <img src="https://mechaland.id/cdn/shop/files/00_pJdJruk_400x.jpg?v=1730339685" alt="{{ $keyboard->name }}" class="img-fluid mx-auto d-block" style="max-height: 80px;">
                                    @elseif($keyboard->image_url)
                                        <img src="{{ $keyboard->image_url }}" alt="{{ $keyboard->name }}" class="img-fluid mx-auto d-block" style="max-height: 80px;">
                                    @else
                                        <img src="https://via.placeholder.com/400x80?text=No+Image" alt="No Image" class="img-fluid mx-auto d-block" style="max-height: 80px;">
                                    @endif
                                </div>
                                <h5 class="card-title">{{ $keyboard->name }}</h5>
                                <p class="card-text">{{ Str::limit($keyboard->description, 100) }}</p>
                                <p class="text-primary fw-bold">$ {{ number_format($keyboard->price, 2) }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
