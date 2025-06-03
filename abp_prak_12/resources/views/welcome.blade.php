@extends('layouts.app')

@section('content')
<div class="bg-primary text-white text-center py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Welcome to the Mecaone Store</h1>
        <p class="lead mb-4">Explore our collection of quality keyboards.</p>
        <a href="{{ route('keyboards.index') }}" class="btn btn-light btn-lg shadow-sm" style="transition: transform 0.3s ease;">
            Shop Keyboards
        </a>
    </div>
</div>

<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#007bff" class="bi bi-speedometer2" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3.793l2.146 2.147a.5.5 0 0 1-.708.708l-2.5-2.5A.5.5 0 0 1 7.5 8V4.5A.5.5 0 0 1 8 4z"/>
                        <path fill-rule="evenodd" d="M6.664 15.889A7 7 0 1 1 9.336.11a7 7 0 0 1-2.672 15.778zm.858-1.287a6 6 0 1 0-1.044-11.204 6 6 0 0 0 1.044 11.204z"/>
                    </svg>
                </div>
                <h5>Fast Shipping</h5>
                <p>Get your keyboards delivered quickly and safely.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#007bff" class="bi bi-shield-lock" viewBox="0 0 16 16">
                        <path d="M5.5 9a1.5 1.5 0 0 1 3 0v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 1-1 0v-1z"/>
                        <path d="M8 0c-.69 0-1.36.07-2 .2a7.002 7.002 0 0 0-4.5 3.5c-.5 1-.5 2.5-.5 4 0 3.5 2.5 6.5 7 7 4.5-.5 7-3.5 7-7 0-1.5 0-3-.5-4a7.002 7.002 0 0 0-4.5-3.5A7.002 7.002 0 0 0 8 0z"/>
                    </svg>
                </div>
                <h5>Secure Payment</h5>
                <p>Shop with confidence using our secure payment system.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#007bff" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.54 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.54l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.434-2.54-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.69 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.69l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.69l.16.291c.415.764-.42 1.6-1.185 1.184l-.292-.159a1.873 1.873 0 0 0-2.69 1.116l-.094.317c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.69-1.115l-.291.16c-.764.415-1.6-.42-1.184-1.185l.159-.292a1.873 1.873 0 0 0-1.116-2.69l-.317-.094c-.835-.246-.835-1.428 0-1.674l.319-.094a1.873 1.873 0 0 0 1.115-2.69l-.16-.291c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.69-1.116l.094-.318z"/>
                    </svg>
                </div>
                <h5>Customizable</h5>
                <p>Find keyboards that fit your style and needs.</p>
            </div>
        </div>
    </div>
</div>

<script>
    const shopBtn = document.querySelector('.btn.btn-light');
    if (shopBtn) {
        shopBtn.addEventListener('mouseenter', () => {
            shopBtn.style.transform = 'scale(1.05)';
        });
        shopBtn.addEventListener('mouseleave', () => {
            shopBtn.style.transform = 'scale(1)';
        });
    }
</script>
@endsection
