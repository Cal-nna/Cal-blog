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
            <div class="flex justify-center items-center">
                <!-- Picture Frame -->
                <div class="p-2 bg-gradient-to-br from-gray-300 to-gray-100 border-8 border-gray-400 rounded-lg shadow-lg">
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
@endsection
