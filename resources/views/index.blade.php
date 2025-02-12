@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-6xl uppercase font-bold text-shadow-md pb-14" style="font-family: 'Playfair Display', serif;">
                    The things that inspire the artists
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-white text-indigo-600 py-3 px-6 font-bold text-xl uppercase rounded-full hover:bg-indigo-600 hover:text-white transition duration-300">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="border-8 border-white rounded-lg"> <!-- Thicker white border -->
        <div class="bg-cover bg-center" style="background-image: url('https://t4.ftcdn.net/jpg/03/00/94/69/240_F_300946931_kSR84OqudEhsmBZH47HU6ud7aZIDMjEx.jpg');">
            <div class="sm:grid grid-cols-3 gap-10 w-4/5 mx-auto py-20">
                <!-- Left Side: First Row of Text -->
                <div class="m-auto text-left">
                    <h2 class="text-3xl font-bold text-gray-900" style="font-family: 'Merriweather', serif;"> <!-- Brighter red text -->
                        Ideas...
                    </h2>
                </div>

                <!-- Middle: Larger Image -->
                <div class="flex justify-center items-center col-span-1">
                    <img src="https://art.ngfiles.com/images/6005000/6005692_1163749_thecal_cold-weather.011e92362a5877a5f6c673400483cb53.webp?f1725297720" width="1000" alt="" class="rounded-lg shadow-2xl max-w-full">
                </div>

                <!-- Right Side: Second Row of Text -->
                <div class="m-auto text-left">
                    <p class="py-8 text-gray-900 text-lg"> <!-- Brighter red text -->
                        ... they come from anywhere and everywhere...
                    </p>

{{--                    <a--}}
{{--                        href="/blog"--}}
{{--                        class="uppercase bg-indigo-600 text-white text-lg font-bold py-3 px-8 rounded-full hover:bg-indigo-700 transition duration-300">--}}
{{--                        Find Out More--}}
{{--                    </a>--}}
                </div>

                <!-- Left Side: Third Row of Text (Moved Down) -->
                <div class="m-auto text-left mt-12 col-span-3"> <!-- Added mt-12 for top margin and col-span-3 to span full width -->
                    <p class="font-semibold text-gray-900 text-lg"> <!-- Brighter red text -->
                        Our ideas come from everything we see and do, things that inspire us.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center p-20 bg-gray-900 text-white">
        <h2 class="text-3xl pb-5" style="font-family: 'Playfair Display', serif;">
            Expression is unique from person to person...
        </h2>

        <span class="font-bold block text-5xl py-1" style="font-family: 'Merriweather', serif;">
            What could come for
        </span>
        <span class="font-bold block text-5xl py-1" style="font-family: 'Merriweather', serif;">
            YOUR
        </span>
        <span class="font-bold block text-5xl py-1" style="font-family: 'Merriweather', serif;">
            Mind...
        </span>
        <span class="font-bold block text-5xl py-1" style="font-family: 'Merriweather', serif;">
            Write about it here for all to see
        </span>
    </div>

    <div class="text-center py-20">
        <span class="uppercase text-sm text-indigo-600 font-bold">
            Mind Blurbs
        </span>

        <h2 class="text-5xl font-bold py-10 text-gray-800" style="font-family: 'Playfair Display', serif;">
            Recent Enlightments
        </h2>

        <p class="m-auto w-4/5 text-gray-600 text-lg">
            This site allows you to share the things that inspire your means to express, what you choose to express and so on.
            So go on, snoop about or write about yourself!
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-indigo-600 text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-sm font-bold">
                    PHP
                </span>

                <h3 class="text-2xl font-bold py-10" style="font-family: 'Merriweather', serif;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-white text-white text-sm font-bold py-3 px-6 rounded-full hover:bg-white hover:text-indigo-600 transition duration-300">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" class="rounded-lg shadow-2xl">
        </div>
    </div>
@endsection
