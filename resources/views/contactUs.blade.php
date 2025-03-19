@extends('layouts.app')

@section('content')
    <!-- Full-Page Background with Hero Section -->
    <div class="bg-cover bg-center bg-fixed" style="background-image: url('https://img.freepik.com/free-photo/granite-texture_1160-692.jpg?t=st=1742383334~exp=1742386934~hmac=4bee154ab131ea37626c4bc5e4ac8d1124860b147c5fa36443a9e58343f7d19a&w=1380');">
        <!-- Hero Content -->
        <div class="text-center py-20">
            <h1 class="text-5xl font-bold text-white" style="font-family: 'Playfair Display', serif;">
                Contact Us
            </h1>
            <p class="mt-4 text-white text-lg">
                We'd love to hear from you! Reach out to us for any inquiries or feedback.
            </p>
        </div>

        <!-- Display success message -->
        @if (session()->has('message'))
            <div class="w-4/5 m-auto mt-10 pl-2">
                <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                    {{ session()->get('message') }}
                </p>
            </div>
        @endif

        <!-- Contact Information Section -->
        <div class="w-4/5 mx-auto pb-20">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white" style="font-family: 'Merriweather', serif;">
                    Get in Touch
                </h2>
                <p class="mt-4 text-white text-lg">
                    Here's how you can reach us:
                </p>
                <div class="mt-8 text-white text-lg">
                    <p><strong>Email:</strong> info@example.com</p>
                    <p><strong>Phone:</strong> +1 (123) 456-7890</p>
                    <p><strong>Address:</strong> 123 Art Street, Creative City, CA 90210</p>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="w-4/5 mx-auto pb-20">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white" style="font-family: 'Merriweather', serif;">
                    Send Us a Message
                </h2>
                <p class="mt-4 text-white text-lg">
                    Fill out the form below, and we'll get back to you as soon as possible.
                </p>
                <form action="{{ route('contactUs.store') }}" method="POST" class="mt-8 max-w-lg mx-auto">
                    @csrf <!-- Add CSRF token for security -->
                    <div class="mb-6">
                        <input type="text" name="name" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <input type="email" name="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <textarea name="message" placeholder="Your Message" rows="5" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 text-white py-3 px-6 font-bold text-lg uppercase rounded-full hover:bg-blue-600 transition duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
