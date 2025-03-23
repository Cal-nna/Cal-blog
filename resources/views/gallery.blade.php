@extends('layouts.app')

@section('content')
    <!-- Background Section with Inline Styles -->
    <div style="background-image: url('{{ asset('images/Screenshot 2025-03-23 143751.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <!-- Text Section with Gradient Overlay for Fade Effect -->
        <div class="text-center py-20" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3), transparent);"> <!-- Gradient overlay -->
            <h1 class="text-5xl font-bold text-white" style="font-family: 'Playfair Display', serif;">
                Image Gallery
            </h1>
            <p class="mt-4 text-gray-200 text-lg">
                Explore our collection of inspiring works and discover the stories behind them.
            </p>
        </div>

        <!-- Image Grid -->
        <div class="sm:grid grid-cols-3 gap-8 w-4/5 mx-auto pb-20">
            @foreach($posts as $post)
                <div class="flex justify-center items-center">
                    <!-- Picture Frame with Shadow -->
                    <div class="p-2 bg-gradient-to-br from-gray-300 to-gray-100 border-8 border-gray-400 rounded-lg shadow-2xl hover:shadow-3xl transition-shadow duration-300">
                        <!-- Inner Shadow for Depth -->
                        <div class="p-4 bg-white border-4 border-gray-200 shadow-inner rounded-lg">
                            <!-- Wrap the image in an anchor tag to make it a redirect button -->
                            <a href="/blog/{{ $post->slug }}">
                                <img
                                    src="{{ asset('images/' . $post->image_path) }}"
                                    alt="{{ $post->title }}"
                                    class="max-w-full h-auto"
                                >
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
