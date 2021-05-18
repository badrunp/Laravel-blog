@extends('layouts.app')

@section('title', 'Admin - All Post')
@section('content')
<div class="container mx-auto my-20 relative antialiased    ">
    <div class="max-w-xs sm:max-w-sm mx-auto md:max-w-none md:w-6/12 lg:w-5/12">
        <div class="bg-white shadow rounded p-6">
            <div class="mb-6">
                <h1 class="text-gray-300 text-lg lg:text-3xl">Create Post</h1>
            </div>
            <div class="mb-6">
                <form action="{{ route('admin.blogStore') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="text-base text-gray-600 mb-1 block" for="title">Title</label>
                        <input type="text" class="w-full rounded border border-gray-300 focus:outline-none py-2 px-2 text-gray-400 @error('title') border-red-500 @enderror focus:ring-2 focus:ring-offset-red-300 focus:border-transparent transition ease-out duration-150 focus:ring-red-300" name="title" id="title" value="{{ old('title') }}" />
                        @error('title')
                        <div class="mt-1">
                            <p class="block text-red-500 text-sm">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="text-base text-gray-600 mb-1 block" for="body">body</label>
                        <textarea type="text" class="w-full rounded border border-gray-300 focus:outline-none py-2 px-2 text-gray-400 @error('body') border-red-500 @enderror focus:ring-2 focus:ring-offset-red-300 focus:border-transparent transition ease-out duration-150 focus:ring-red-300" name="body" id="body">{{ old('body') }}</textarea>
                        @error('body')
                        <div class="mt-1">
                            <p class="block text-red-500 text-sm">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="text-base text-gray-600 mb-1 block" for="tag">Tag</label>
                        <input type="text" class="w-full rounded border border-gray-300 focus:outline-none py-2 px-2 text-gray-400 @error('tag') border-red-500 @enderror focus:ring-2 focus:ring-offset-red-300 focus:border-transparent transition ease-out duration-150 focus:ring-red-300" name="tag" id="tag" value="{{ old('tag') }}" placeholder="example: #tag1 #tag2 #tag3" />
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
                    </div>
                    <div class="mt-5 flex items-center space-x-2">
                        <button type="submit" class="py-3 px-5 flex items-center bg-blue-500 focus:outline-none text-white text-sm lg:text-base rounded font-medium tracking-wide hover:bg-blue-600 transition ease-out duration-150 focus:ring-2 focus:ring-blue-300 focus:ring-offset-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Create
                            <button>
                        <a href="{{ route('admin.blogIndex') }}" class="py-3 px-5 flex items-center bg-yellow-500 focus:outline-none text-white text-sm lg:text-base rounded font-medium tracking-wide hover:bg-yellow-600 transition ease-out duration-150 focus:ring-2 focus:ring-yellow-300 focus:ring-offset-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
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
