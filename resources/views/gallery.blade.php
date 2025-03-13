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
            <a href="/post/{{ $post->id }}" class="block overflow-hidden rounded-lg shadow-2xl hover:shadow-xl transition-all duration-300 hover:scale-105">
                <img src="{{ asset($post->image_path) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-bold text-gray-800" style="font-family: 'Merriweather', serif;">
                        {{ $post->title ?? 'Untitled' }}
                    </h3>
                    <p class="mt-2 text-gray-600">
                        {{ Str::limit($post->content, 100) ?? 'No description available.' }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
