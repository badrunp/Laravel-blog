@extends('layouts.app')

@section('title', 'Admin - All Post')
@section('content')
<div class="container mx-auto my-20 relative antialiased    ">
    <div class="max-w-xs sm:max-w-sm mx-auto md:max-w-none md:w-6/12 lg:w-5/12">
        <div class="bg-white shadow rounded p-6">
            <div class="mb-6">
                <h1 class="text-gray-300 text-lg lg:text-3xl">Update Post</h1>
            </div>
            <div class="mb-6">
                <form action="{{ route('admin.blogUpdate', ['id' => $post->id ]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="text-base text-gray-600 mb-1 block" for="title">Title</label>
                        <input type="text" class="w-full rounded border border-gray-300 focus:outline-none py-2 px-2 text-gray-400 @error('title') border-red-500 @enderror focus:ring-2 focus:ring-offset-red-300 focus:border-transparent transition ease-out duration-150 focus:ring-red-300" name="title" id="title" value="{{ old('title') ? old('title') : $post->title }}" />
                        @error('title')
                        <div class="mt-1">
                            <p class="block text-red-500 text-sm">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="text-base text-gray-600 mb-1 block" for="body">body</label>
                        <textarea type="text" class="w-full rounded border border-gray-300 focus:outline-none py-2 px-2 text-gray-400 @error('body') border-red-500 @enderror focus:ring-2 focus:ring-offset-red-300 focus:border-transparent transition ease-out duration-150 focus:ring-red-300" name="body" id="body">{{ old('body') ? old('body') : $post->body }}</textarea>
                        @error('body')
                        <div class="mt-1">
                            <p class="block text-red-500 text-sm">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="text-base text-gray-600 mb-1 block" for="tag">Tag</label>
                        <input type="text" class="w-full rounded border border-gray-300 focus:outline-none py-2 px-2 text-gray-400 @error('tag') border-red-500 @enderror focus:ring-2 focus:ring-offset-red-300 focus:border-transparent transition ease-out duration-150 focus:ring-red-300" name="tag" id="tag" value="{{ old('tag') ? old('tag') : $post->tag }}" />
                        @error('tag')
                        <div class="mt-1">
                            <p class="block text-red-500 text-sm">{{ $message }}</p>
                        </div>
                        @enderror
                        @if(session()->has('tag_message'))
                        <div class="mt-1">
                            <p class="block text-red-500 text-sm">{{ session()->get('tag_message') }}</p>
                        </div>
                        @endif


                    </div>
                    <div class="mb-3">
                        <label class="text-base text-gray-600 mb-1 block" for="image">Image</label>
                        <input type="file" id="image" name="image" />
                        @error('image')
                        <div class="mt-1">
                            <p class="block text-red-500 text-sm">{{ $message }}</p>
                        </div>
                        @enderror

                        <div class="relative mt-2">
                            <label class="block text-base text-gray-600">Old image</label>
                            <img src="{{ asset('storage/uploads/' . $post->image ) }}" width="100" />
                            <input type="hidden" name="oldImage" value="{{ $post->image }}"  />
                        </div>
                    </div>
                    <div class="mt-5 flex items-center space-x-2">
                        <button type="submit" class="py-3 px-5 flex items-center bg-blue-500 focus:outline-none text-white text-sm lg:text-base rounded font-medium tracking-wide hover:bg-blue-600 transition ease-out duration-150 focus:ring-2 focus:ring-blue-300 focus:ring-offset-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                            </svg>
                            Update
                            <button>
                        <a href="{{ route('admin.blogIndex') }}" class="py-3 px-5 flex items-center bg-yellow-500 focus:outline-none text-white text-sm lg:text-base rounded font-medium tracking-wide hover:bg-yellow-600 transition ease-out duration-150 focus:ring-2 focus:ring-yellow-300 focus:ring-offset-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                            </svg>
                            Back
                            <a>

                            
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
