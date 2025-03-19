@extends('layouts.app')

@section('content')
    <div class="text-center py-20">
        <h1 class="text-5xl font-bold text-gray-800" style="font-family: 'Playfair Display', serif;">
            Image Gallery
        </h1>
        <p class="mt-4 text-gray-600 text-lg">
            Explore our collection of inspiring works and discover the stories behind them.
        </p>
    </div>

    <!-- Image Grid -->
    <div class="sm:grid grid-cols-3 gap-8 w-4/5 mx-auto pb-20">
        @foreach($posts as $post)
            <div class="block overflow-hidden rounded-lg shadow-2xl hover:shadow-xl transition-all duration-300 hover:scale-105">
                <!-- Ensure the image path is correct -->
                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-auto object-cover aspect-auto">
            </div>
        @endforeach
    </div>
@endsection
