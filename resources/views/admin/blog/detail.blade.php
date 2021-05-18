@extends('layouts.app')

@section('title', 'Admin - All Post')
@section('content')
<div class="container mx-auto py-20 relative antialiased">
    <div class="max-w-xs sm:max-w-sm mx-auto md:max-w-none md:w-7/12">
        <div class="bg-white shadow rounded mx-auto p-6">
            <div class="mb-6">
                <div class="flex items-center justify-between">
                    <h1 class="text-gray-300 font-medium text-lg lg:text-3xl">Detail Post <span class="inline-block underline">{{ $post->title }}</span></h1>
                </div>
            </div>
            <div>
                <table class="w-full">
                    <tr>
                        <td class="text-base tracking-wide py-2 text-gray-600">
                            <img src="{{ asset('storage/uploads/' . $post->image) }}" width="150" />
                        </td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Title</td>
                        <td class="text-base tracking-wide py-2 text-gray-600">{{ $post->title }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Slug</td>
                        <td class="text-base tracking-wide py-2 text-gray-600">{{ $post->slug }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Body</td>
                        <td class="text-base tracking-wide py-2 text-gray-600">{{ $post->body }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Tag</td>
                        <td class="text-base tracking-wide py-2 text-gray-600">{{ $post->tag }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Author</td>
                        <td class="text-base tracking-wide py-2 text-gray-600 italic">{{ $post->user->username }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Status</td>
                        <td class="text-base tracking-wide py-2 text-gray-600">{!! $post->status ? '<p class="text-green-500">[Active]</p>' : '<p class="text-green-500">[Un Active]</p>' !!}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Created</td>
                        <td class="text-base tracking-wide py-2 text-gray-600">{{ $post->created_at }}</td>
                    </tr>
                    <tr class="border-b border-gray-300">
                        <td class="text-base tracking-wide py-2 text-gray-600 w-28 pr-10 font-medium">Updated</td>
                        <td class="text-base tracking-wide py-2 text-gray-600">{{ $post->updated_at }}</td>
                    </tr>
                </table>
            </div>

            <div class="pt-6 pb-4 flex items-center justify-end">
                <a href="{{ route('admin.blogIndex') }}" class="text-sm py-2 px-4 rounded bg-yellow-500 text-white focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:ring-offset-1">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection