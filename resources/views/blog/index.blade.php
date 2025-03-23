@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl font-bold text-gray-800">
                Blog Posts
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a
                href="/blog/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl hover:bg-blue-600 transition duration-300">
                Create post
            </a>
        </div>
    @endif

    <!-- Card Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-4/5 mx-auto py-15">
        @foreach ($posts as $post)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <!-- Post Image -->
                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">

                <!-- Post Content -->
                <div class="p-6">
                    <!-- Post Title -->
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        {{ $post->title }}
                    </h2>

                    <!-- Post Metadata -->
                    <div class="text-gray-500 text-sm mb-4">
                        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>,
                        Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </div>

                    <!-- Post Description -->
                    <p class="text-gray-700 leading-6 mb-4">
                        {{ Str::limit($post->description, 100) }}
                    </p>

                    <!-- Keep Reading Button -->
                    <a href="/blog/{{ $post->slug }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300">
                        Keep Reading
                    </a>

                    <!-- Like Button -->
                    <div class="mt-4">
                        <button
                            onclick="likePost({{ $post->id }})"
                            class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full hover:bg-gray-300 transition duration-300">
                            ❤️ Like (<span id="likes-{{ $post->id }}">{{ $post->likes }}</span>)
                        </button>
                    </div>

                    <!-- Edit and Delete Buttons -->
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <div class="mt-4 flex space-x-4">
                            <a
                                href="/blog/{{ $post->slug }}/edit"
                                class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                Edit
                            </a>
                            <form action="/blog/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')
                                <button
                                    class="text-red-500 hover:text-red-700"
                                    type="submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <!-- JavaScript to Handle Like Button -->
    <script>
        function likePost(postId) {
            fetch(`/posts/${postId}/like`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Update the likes count on the page
                    document.getElementById(`likes-${postId}`).textContent = data.likes;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while liking the post.');
                });
        }
    </script>
@endsection
