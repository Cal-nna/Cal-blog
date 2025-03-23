@extends('layouts.app')

@section('content')
    <!-- Background Image -->
    <div class="min-h-screen bg-cover bg-center bg-fixed" style="background-image: url('https://upload.wikimedia.org/wikipedia/en/thumb/b/b8/Natural_floating_island.jpg/1280px-Natural_floating_island.jpg');">
        <!-- Title Container -->
        <div class="w-4/5 mx-auto text-center pt-10"> <!-- Added mx-auto and text-center -->
            <div class="py-6 bg-black bg-opacity-50 border-4 border-yellow-500 rounded-lg p-6">
                <h1 class="text-6xl font-bold text-white">
                    {{ $post->title }}
                </h1>
            </div>
        </div>

        <!-- Content Container -->
        <div class="w-4/5 mx-auto pt-10"> <!-- Added mx-auto -->
            <!-- Display the Blog Post Image -->
            <div class="my-6 flex justify-center">
                <img
                    src="{{ asset('images/' . $post->image_path) }}"
                    alt="{{ $post->title }}"
                    class="w-3/4 md:w-1/1 lg:w-1/2 h-auto rounded-lg shadow-xl border-4 border-yellow-500">
            </div>

            <!-- Text Container -->
            <div class="bg-black bg-opacity-50 border-4 border-yellow-500 rounded-lg p-6">
                <span class="text-gray-200">
                    By <span class="font-bold italic text-gray-100">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-gray-200 pt-6 pb-8 leading-8 font-light">
                    {{ $post->description }}
                </p>
            </div>
        </div>
    </div>
@endsection
