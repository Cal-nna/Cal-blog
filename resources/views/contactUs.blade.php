@extends('layouts.app')

@section('content')
    <!-- Full-Page Background with Hero Section -->
    <div class="bg-cover bg-center bg-fixed" style="background-image: url('https://as2.ftcdn.net/v2/jpg/00/89/77/73/1000_F_89777349_qZHYXmVPP13p7CrjaKQ5Y2rLarXQM363.jpg');">
        <!-- Hero Content -->
        <div class="text-center py-20">
            <h1 class="text-5xl font-bold text-white" style="font-family: 'Playfair Display', serif;">
                Contact Us
            </h1>
            <p class="mt-4 text-white text-lg">
                We'd love to hear from you! Reach out to us for any inquiries or feedback.
            </p>
        </div>

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
                <form class="mt-8 max-w-lg mx-auto">
                    <div class="mb-6">
                        <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <textarea placeholder="Your Message" rows="5" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
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
