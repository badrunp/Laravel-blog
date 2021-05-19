@extends('layouts.app')

@section('title', 'Blog Post - Article')
@section('content')
<div class="container relative mx-auto antialiased pt-20">
    <div class="max-w-xs sm:max-w-sm md:max-w-none md:w-10/12 lg:w-8/12 mx-auto">
        <div class="mx-auto bg-white shadow rounded p-6 mb-8 -mt-1">
            <div class="flex items-center justify-between">
                <span class="text-lg lg:text-3xl text-gray-300 font-medium">{{ $title }}</span>
                <select id="shorting" class="border border-gray-300 font-medium rounded text-gray-600 text-xs w-32 md:w-auto md:text-sm py-2 px-2 cursor-pointer focus:outline-none focus:ring-2 focus:border-transparent focus:ring-red-300 transition ease-out duration-150">
                    @foreach($shorting as $key => $value)
                        @if($value['value'] === $query)
                            <option value="{{ $value['value'] }}" class="text-gray-400 tracking-wide">{{ $value['title'] }}</a></option>
                        @endif
                    @endforeach
                    <option value="" class="text-gray-400 tracking-wide">Shorting Article</a></option>
                    @foreach($shorting as $key => $value)
                        @if($value['value'] !== $query)
                            <option value="{{ $value['value'] }}" class="text-gray-400 tracking-wide">{{ $value['title'] }}</a></option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-8 gap-x-4 gap-y-6">
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
                            @for($i = 0; $i < count($tag); $i++)                  
                                <span class="inline-block text-sm text-red-500">{{ $tag[$i] }}</span>
                            @endfor
                        </div>
                    </div>
                </div>
                @empty
                    <p class="text-center text-sm font-medium text-gray-600 tracking-tight">No result posts</p>
                @endforelse
            </div>

            <div class="mt-5">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
