@extends('layouts.app')

@section('content')
    <div class="text-center py-20">
        <h1 class="text-5xl font-bold text-gray-800" style="font-family: 'Playfair Display', serif;">
            About Us
        </h1>
        <p class="mt-4 text-gray-600 text-lg">
            Discover the story behind our passion for art and creativity.
        </p>
    </div>

    <!-- Mission Section -->
    <div class="w-4/5 mx-auto pb-20">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800" style="font-family: 'Merriweather', serif;">
                Our Mission
            </h2>
            <p class="mt-4 text-gray-600 text-lg">
                To inspire and empower artists by providing a platform for creative expression and collaboration.
            </p>
        </div>
    </div>

    <!-- Vision Section -->
    <div class="w-4/5 mx-auto pb-20">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800" style="font-family: 'Merriweather', serif;">
                Our Vision
            </h2>
            <p class="mt-4 text-gray-600 text-lg">
                To create a global community where artists can share their work and inspire others.
            </p>
        </div>
    </div>

    <!-- Team Section -->
    <div class="w-4/5 mx-auto pb-20">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800" style="font-family: 'Merriweather', serif;">
                Meet Our Team
            </h2>
            <p class="mt-4 text-gray-600 text-lg">
                We are a group of passionate individuals dedicated to supporting artists and fostering creativity.
            </p>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="text-center pb-20">
        <a href="/blog" class="bg-blue-500 text-white py-3 px-6 font-bold text-lg uppercase rounded-full hover:bg-blue-600 transition duration-300">
            Join Our Community
        </a>
    </div>
@endsection
