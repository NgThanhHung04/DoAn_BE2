@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="product-details">
                <div class="product-image">
                    <img src="{{ asset('uploads/image/' . $user->image) }}" alt="Image">
                </div>
                <div class="product-info">
                    <h2 class="product-name">{{ $user->name }}</h2>
                    <p class="product-id">ID: {{ $user->id }}</p>
                    <p class="product-email">Email: {{ $user->email }}</p>
                    <p class="product-phone">Phone: {{ $user->phone }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
