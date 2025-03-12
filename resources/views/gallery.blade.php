<!-- resources/views/gallery.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
@include('layouts.app') <!-- Include the header -->

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
    <!-- Image 1 -->
    <a href="/page1" class="block overflow-hidden rounded-lg shadow-2xl hover:shadow-xl transition-all duration-300 hover:scale-105">
        <img src="https://images.pexels.com/photos/281260/pexels-photo-281260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Image 1" class="w-full h-64 object-cover">
        <div class="p-6 bg-white">
            <h3 class="text-xl font-bold text-gray-800" style="font-family: 'Merriweather', serif;">
                Page 1
            </h3>
            <p class="mt-2 text-gray-600">
                Explore the first collection of inspiring works.
            </p>
        </div>
    </a>

    <!-- Add more images as needed -->
</div>

 <!-- Include the footer -->
</body>
@include('layouts.footer')
</html>

