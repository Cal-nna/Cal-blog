@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-6xl uppercase font-bold text-shadow-md pb-14" style="font-family: 'Playfair Display', serif;">
                    The things that inspire the artists
                </h1>
            </div>
        </div>
    </div>

    <div class="border-8 border-white rounded-lg">
        <div class="bg-cover bg-center" style="background-image: url('https://t4.ftcdn.net/jpg/03/00/94/69/240_F_300946931_kSR84OqudEhsmBZH47HU6ud7aZIDMjEx.jpg');">
            <div class="sm:grid grid-cols-3 gap-10 w-4/5 mx-auto py-20">
                <!-- Left Side: First Row of Text -->
                <div class="m-auto text-left">
                    <h2 class="text-3xl font-bold text-gray-900" style="font-family: 'Merriweather', serif;">
                        Ideas...
                    </h2>
                </div>

                <!-- Middle: Larger Image -->
                <div class="flex justify-center items-center col-span-1">
                    <img src="https://art.ngfiles.com/images/6005000/6005692_1163749_thecal_cold-weather.011e92362a5877a5f6c673400483cb53.webp?f1725297720" width="1000" alt="" class="rounded-lg shadow-2xl max-w-full">
                </div>

                <!-- Right Side: Second Row of Text -->
                <div class="m-auto text-left">
                    <p class="py-8 text-gray-900 text-lg">
                        ... they come from anywhere and everywhere...
                    </p>
                </div>

                <!-- Left Side: Third Row of Text (Moved Down) -->
                <div class="m-auto text-left mt-12 col-span-3">
                    <p class="font-semibold text-gray-900 text-lg">
                        Our ideas come from everything we see and do, things that inspire us.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center p-20 bg-cover bg-center relative" style="background-image: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcHg5MjU4MDYtaW1hZ2Uta3d2dXNmMWIuanBn.jpg');">
        <!-- Semi-transparent overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Content -->
        <div class="relative">
            <h2 class="text-3xl pb-5 text-white" style="font-family: 'Playfair Display', serif;">
                Expression is unique from person to person...
            </h2>

            <span class="font-bold block text-5xl py-1 text-white" style="font-family: 'Merriweather', serif;">
                What could come for
            </span>
            <span class="font-bold block text-5xl py-1 text-white" style="font-family: 'Merriweather', serif;">
                YOUR
            </span>
            <span class="font-bold block text-5xl py-1 text-white" style="font-family: 'Merriweather', serif;">
                Mind...
            </span>
            <span class="font-bold block text-5xl py-1 text-white" style="font-family: 'Merriweather', serif;">
                Write about it here for all to see
            </span>

            <a
                href="/blog"
                class="inline-block mt-10 text-center bg-white text-indigo-600 py-3 px-6 font-bold text-xl uppercase rounded-full hover:bg-indigo-600 hover:text-white transition duration-300">
                Read More
            </a>
        </div>
    </div>

    <!-- Gallery Section with Blog Post Images -->
    <div class="sm:grid grid-cols-3 gap-10 w-4/5 m-auto mt-20">
        @foreach($posts as $post)
            <a href="/blog/{{ $post->slug }}" class="block overflow-hidden rounded-lg shadow-2xl hover:shadow-xl transition-all duration-300 hover:scale-105">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-bold text-gray-800" style="font-family: 'Merriweather', serif;">
                        {{ $post->title }}
                    </h3>
                    <p class="mt-2 text-gray-600">
                        {{ Str::limit($post->description, 100) }} <!-- Limit description to 100 characters -->
                    </p>
                </div>
            </a>
        @endforeach
    </div>

    <!-- Centered "See more images" Button -->
    <div class="flex justify-center mt-12">
        <a class="no-underline hover:underline" href="{{ route('gallery') }}">{{ __('Gallery') }}</a>
    </div>
@endsection
