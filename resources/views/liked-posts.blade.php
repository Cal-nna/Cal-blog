@extends('layouts.app')

@section('content')
    <!-- Background Image -->
    <div class="min-h-screen bg-cover bg-center bg-fixed" style="background-image: url('https://blissylife.com/wp-content/uploads/2019/02/Dal%C3%AD-Theatre-Museum-10-of-22.jpg');">
        <div class="w-4/5 m-auto text-center pt-10">
            <div class="py-15 border-b border-gray-200">
                <h1 class="text-6xl font-bold text-white">
                    Liked Posts
                </h1>
            </div>
        </div>

        @if ($likedPosts->isEmpty())
            <div class="w-4/5 m-auto mt-10 pl-2">
                <p class="w-2/6 mb-4 text-gray-50 bg-blue-500 rounded-2xl py-4">
                    You haven't liked any posts yet.
                </p>
            </div>
        @else
            @foreach ($likedPosts as $post)
                <!-- Post Container -->
                <div class="flex justify-center items-center w-full mx-auto py-15"> <!-- Centered and full width -->
                    <!-- Black Transparent Box -->
                    <div class="bg-black bg-opacity-50 border-4 border-yellow-500 rounded-lg p-8 w-3/4"> <!-- Larger width (75%) -->
                        <div class="sm:grid grid-cols-2 gap-8">
                            <!-- Post Image -->
                            <div>
                                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-96 object-cover rounded-lg shadow-xl"> <!-- Larger image height -->
                            </div>

                            <!-- Post Content -->
                            <div>
                                <h2 class="text-4xl font-bold text-white pb-4">
                                    {{ $post->title }}
                                </h2>

                                <span class="text-gray-300">
                                    By <span class="font-bold italic text-gray-100">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                                </span>

                                <p class="text-xl text-gray-200 pt-8 pb-10 leading-8 font-light">
                                    {{ $post->description }}
                                </p>

                                <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-600 transition duration-300">
                                    Keep Reading
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
