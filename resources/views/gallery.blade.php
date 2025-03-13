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
        @foreach($images as $image)
            <a href="/page1" class="block overflow-hidden rounded-lg shadow-2xl hover:shadow-xl transition-all duration-300 hover:scale-105">
                <img src="{{ asset($image->image_path) }}" alt="{{ $image->title }}" class="w-full h-64 object-cover">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-bold text-gray-800" style="font-family: 'Merriweather', serif;">
                        {{ $image->title ?? 'Untitled' }}
                    </h3>
                    <p class="mt-2 text-gray-600">
                        {{ $image->description ?? 'No description available.' }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
