@extends('layouts.app')

@section('content')
    <!-- Background Image -->
    <div class="min-h-screen bg-cover bg-center bg-fixed" style="background-image: url('https://media.istockphoto.com/id/1143575463/photo/aerial-view-of-the-ocean-surface.jpg?s=612x612&w=0&k=20&c=TcY12kd6fFEvHzXFEkF62ukfhVZV8cOBtoquCQTGmZM=');">
        <div class="w-4/5 m-auto text-left pt-10">
            <div class="py-15">
                <h1 class="text-6xl font-bold text-white">
                    Create Post
                </h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="w-4/5 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="w-4/5 m-auto pt-20">
            <form
                action="/blog"
                method="POST"
                enctype="multipart/form-data">
                @csrf

                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                    class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none text-white">

                <textarea
                    name="description"
                    placeholder="Description..."
                    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none text-white"></textarea>

                <div class="bg-grey-lighter pt-15">
                    <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        <span class="mt-2 text-base leading-normal">
                            Select a file
                        </span>
                        <input
                            type="file"
                            name="image"
                            class="hidden">
                    </label>
                </div>

                <button
                    type="submit"
                    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-600 transition duration-300">
                    Submit Post
                </button>
            </form>
        </div>
    </div>
@endsection
