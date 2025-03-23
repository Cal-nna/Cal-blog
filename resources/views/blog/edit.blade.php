@extends('layouts.app')

@section('content')
    <!-- Background Image -->
    <div class="min-h-screen bg-cover bg-center bg-fixed" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/EWM_shop_2007.jpg/1280px-EWM_shop_2007.jpg');">
        <div class="w-4/5 m-auto text-left pt-10">
            <div class="py-15 bg-black bg-opacity-50 p-10 rounded-xl border border-gray-300">
                <h1 class="text-6xl font-bold text-white">
                    Update Post
                </h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="w-4/5 m-auto bg-black bg-opacity-50 p-6 rounded-xl border border-red-500 mt-10">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="mb-4 text-gray-50 bg-red-700 rounded-2xl py-4 px-6">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="w-4/5 m-auto pt-20">
            <div class="bg-black bg-opacity-50 p-10 rounded-xl border border-gray-300">
                <form
                    action="/blog/{{ $post->slug }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input
                        type="text"
                        name="title"
                        value="{{ $post->title }}"
                        class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none text-white p-2">

                    <textarea
                        name="description"
                        placeholder="Description..."
                        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none text-white p-2">{{ $post->description }}</textarea>

                    <button
                        type="submit"
                        class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-600 transition duration-300">
                        Submit Post
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
