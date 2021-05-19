@extends('layouts.app')

@section('title', 'Blog Post - Home')
@section('content')
<div class="pt-14 lg:pt-16 relative">
    <div class="banner w-full max-h-screen bg-white relative">
        <div class="image">
            <img src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="h-screen w-full object-cover" />
        </div>
        <div class="absolute top-2/4 lg:top-4/5 left-9 md:left-16 transform -translate-y-2/4">
            <div class="text-left w-3/5 -mt-8">
                <span class="block text-sm md:text-lg text-gray-100 font-medium tracking-tight">By <span class="font-bold">Muhammad Badrun</span></span>
                <span class="block font-bold text-gray-100  text-4xl lg:text-6xl  text-shadow tracking-wide">Welcome to My Blog Post Projeck</span>
                <a href="{{ route('blog') }}" class="block py-2 md:py-3 px-4 md:px-5 lg:px-6 bg-red-500 w-max rounded text-gray-100 font-medium text-sm md:text-lg mt-4 md:mt-7 hover:bg-red-600 transition ease-out duration-150 uppercase">View blog</a>
            </div>
        </div>
    </div>

    @if(count($posts_tranding) > 0)
    <div class="my-10 md:my-16">
        <div class="mx-auto max-w-xs sm:max-w-sm md:max-w-none md:w-4/5 ">
            <div class="bg-white shadow-lg rounded">
                <div class="py-6 px-5 border-b border-gray-300">
                    <div class="flex items-center justify-between">
                        <span class="text-lg md:text-2xl font-medium text-gray-500"><i class="fas fa-poll text-red-600 mr-1"></i>Tranding Article</span>
                        <a href="{{ route('blog', ['by' => 'tranding-article']) }}" class="flex items-center text-sm tracking-wide text-blue-500 hover:underline">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-6">
                        @forelse($posts_tranding as $key => $post)
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
                        <p class="text-center text-sm font-medium text-gray-600 tracking-tight">No result Posts tranding</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="my-10 md:my-16">
        <div class="mx-auto max-w-xs sm:max-w-sm md:max-w-none md:w-4/5 ">
            <div class="bg-white shadow-lg rounded">
                <div class="py-6 px-5 border-b border-gray-300">
                    <div class="flex items-center justify-between">
                        <span class="text-lg md:text-2xl font-medium text-gray-500"><i class="fas fa-newspaper text-red-600 mr-1"></i>Latest Article</span>
                        <a href="{{ route('blog', ['by' => 'latest-article']) }}" class="flex items-center text-sm tracking-wide text-blue-500 hover:underline">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-6">
                        @forelse($posts_latest as $key => $post)
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
    <div class="my-10 md:my-16">
        <div class="mx-auto max-w-xs sm:max-w-sm md:max-w-none md:w-4/5 ">
            <div class="bg-white shadow-lg rounded">
                <div class="py-6 px-5 border-b border-gray-300">
                    <div class="flex items-center justify-between">
                        <span class="text-lg md:text-2xl font-medium text-gray-500"><i class="fas fa-eye text-red-600 mr-1"></i>Top Views Article</span>
                        <a href="{{ route('blog', ['by' => 'top-views-article']) }}" class="flex items-center text-sm tracking-wide text-blue-500 hover:underline">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-6">
                        @forelse($posts_top_views as $key => $post)
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
                        <p class="text-center text-sm font-medium text-gray-600 tracking-tight">No result Posts top Views</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
