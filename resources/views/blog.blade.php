@extends('layouts.app')

@section('title', 'Blog Post - Article')
@section('content')
<div class="container relative mx-auto antialiased py-20">
    <div class="max-w-xs sm:max-w-sm md:max-w-none md:w-10/12 lg:w-8/12 mx-auto">
        <div class="mx-auto bg-white shadow rounded p-6 mb-8 -mt-1">
            <div class="flex items-center justify-between">
                <span class="text-lg lg:text-3xl text-gray-300 font-medium">All Articles</span>
                <select class="border border-gray-300 font-medium rounded text-gray-600 text-xs w-32 md:w-auto md:text-sm py-2 px-2 cursor-pointer focus:outline-none focus:ring-2 focus:border-transparent focus:ring-red-300 transition ease-out duration-150">
                    <option value="" class="text-gray-400 tracking-wide">Short Articles</option>
                    <option value="" class="text-gray-400 tracking-wide">Short by New Articles</option>
                    <option value="" class="text-gray-400 tracking-wide">Short by Updated Articles</option>
                    <option value="" class="text-gray-400 tracking-wide">Short by Top Articles</option>
                    <option value="" class="text-gray-400 tracking-wide">Short by Views Articles</option>
                </select>  
            </div>

            <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-8 gap-x-4 gap-y-6">
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
                <div class="shadow-sm border border-gray-200 rounded overflow-hidden">
                    <div class="image">
                        <img src="{{ asset('images/1.jpg') }}" class="object-cover w-full" />
                    </div>
                    <div class="py-3 px-4">
                        <div class="text-left">
                            <p class="text-xs text-gray-500">By <span class="font-medium text-red-500">Muhammad Badrun</span> -  Jan 03, 2020</p>
                        </div>
                        <div class="text-left mt-3">
                            <span class="block text-base text-gray-600 font-medium">Ini adalah judul yang pertama</span>
                        </div>
                        <div class="mt-1 text-left">
                            <p class="block text-sm text-gray-400">Apa Lorem Ipsum Lorem Ipsum hanya Ipsum telah menjadi teks tiruan standar industri sejak</p>
                        </div>
                        <div class="text-left mt-3">
                            <p class="inline-block text-gray-400 text-sm font-medium">Tag:</p>
                            <span class="inline-block text-sm text-blue-500">#alam</span>
                            <span class="inline-block text-sm text-blue-500">#ekonomi</span>
                            <span class="inline-block text-sm text-blue-500">#majalah</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
