@extends('layouts.app')

@section('title', 'Blog Post - Detailt Article')
@section('content')
<div class="mt-16 relative antialiased">
    <div class="py-6 md:py-10">
        <div class="mx-auto max-w-xs sm:max-w-sm md:max-w-none md:w-4/5">
            <div class="bg-white shadow rounded">
                <div class="py-6 px-5">
                    <div class="post">
                        <div class="w-full h-auto text-center">
                            <img src="{{ asset('storage/uploads/' . $post->image) }}" class="max-h-96 mx-auto object-cover" />
                        </div>
                        <div class="content mx-0 md:mx-8 py-6">
                            <div class="title">
                                <h1 class="text-2xl md:text-4xl font-medium tracking-wide text-gray-700">{{ $post->title }}</h1>
                            </div>
                            <div class="mt-1">
                                <span class="text-gray-600 text-xs md:text-sm">By <span class="text-red-500 font-medium">{{ $post->user->username }}</span> - {{ $post->created_at }}</span>
                            </div>
                            <div>
                                <p class="block text-gray-400 mt-2 text-xs md:text-base tracking-wide leading-6">{{ $post->body }}</p>
                            </div>
                            <div class="tag mt-6">
                                <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                                <?php $tag = explode(' ', $post->tag) ?>
                                @for($i = 0; $i < count($tag); $i++) 
                                    <span class="inline-block text-sm text-blue-500">{{ $tag[$i] }}</span>
                                @endfor 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-0 mb-8">
        <div class="mx-auto max-w-xs sm:max-w-sm md:max-w-none md:w-4/5 ">
            <div class="bg-white shadow-lg rounded">
                <div class="py-6 px-5 border-b border-gray-300">
                    <div class="flex items-center justify-between">
                        <span class="text-lg md:text-2xl font-medium text-gray-500"><i class="fab fa-readme text-red-600 mr-1"></i>Related Posts</span>
                        <a href="#" class="flex items-center text-sm tracking-wide text-blue-500 hover:underline">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-6">
                        @forelse($posts as $key => $post)
                        <div class="shadow-sm border border-gray-200 rounded overflow-hidden hover:shadow-xl transition duration-150 ease-out">
                            <a href="{{ route('blog.detailt', ['slug' => $post->slug]) }}" class="image">
                                <img src="{{ asset('storage/uploads/' . $post->image) }}" class="object-cover w-full h-52" />
                            </a>
                            <div class="py-3 px-4">
                                <div class="text-left">
                                    <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">{{ $post->user->username }}</span> - Jan 03, 2020</p>
                                </div>
                                <div class="text-left mt-3">
                                    <a href="{{ route('blog.detailt', ['slug' => $post->slug]) }}" class="block text-base text-blue-500 font-medium hover:underline transition duration-150 ease-out">{{ Str::limit($post->title, 20) }}</a>
                                </div>
                                <div class="mt-1 text-left">
                                    <p class="block text-sm text-gray-400">{{ Str::limit($post->body, 100) }}</p>
                                </div>
                                <div class="text-left mt-3">
                                    <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                                    <?php $tag = explode(' ', $post->tag) ?>
                                    @for($i = 0; $i < count($tag); $i++) <span class="inline-block text-sm text-red-500">{{ $tag[$i] }}</span>
                                        @endfor
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-center text-sm font-medium text-gray-600 tracking-tight">No result posts</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
