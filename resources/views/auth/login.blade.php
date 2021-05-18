@extends('layouts.guest')

@section('title', 'Blog Post - Login')
@section('content')

<div class="container mx-auto relative my-16">
    <div class="max-w-xs sm:max-w-sm md:max-w-none md:w-7/12 lg:w-4/12 mx-auto">
        <div class="relative mb-1 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 lg:h-16 lg:w-16 text-red-600 text-opacity-80" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
            </svg>
            <span class="block text-3xl font-medium text-red-400 uppercase">Blog Post</span>
        </div>
        <div class="bg-white shadow rounded">
            <div class="py-6 px-5">
                <span class="block text-center text-gray-300 font-sans font-semibold text-2xl">Login</span>
            </div>
            <div class="px-5">
                @if(session()->has('message'))
                    <div class="py-3 px-4 text-center bg-red-500 text-white font-medium text-sm tracking-wide rounded w-full mb-4">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('auth.login.store') }}" method="post">
                    @csrf
                    <div class="relative mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute ml-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <input type="text" class="w-full border border-gray-300 rounded py-2 text-sm md:text-base pr-2 font-normal tracking-wide text-gray-400 pl-8 focus:outline-none focus:ring-2 focus:ring-red-300 focus:border-transparent transition ease-out duration-150 @error('email') border-red-500 @enderror" placeholder="Email" name="email" value="{{ old('email') }}" />
                        </div>
                        @error('email')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute ml-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                            </svg>
                            <input type="password" class="w-full border border-gray-300 rounded py-2 text-sm md:text-base pr-2 font-normal tracking-wide text-gray-400 pl-8 focus:outline-none focus:ring-2 focus:ring-red-300 focus:border-transparent transition ease-out duration-150 @error('password') border-red-500 @enderror" placeholder="Password" name="password" value="{{ old('password') }}" />
                        </div>
                        @error('password')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative mb-4 flex justify-between">
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" class="cursor-pointer" style="width: 15px; height: 15px;" name="remember" />
                            <span class="block text-gray-500 text-sm">Remember</span>
                        </div>
                    </div>
                    <div class="relative">
                        <button class="py-2 px-5 bg-red-500 hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300 transition ease-out duration-150 text-xs md:text-base font-medium text-gray-100 rounded">Login</button>
                    </div>
                </form>
            </div>
            <div class="mt-8 pb-6 py-4 px-4 border-t border-gray-300">
                <span class="block text-center text-sm text-gray-600 font-medium">
                    You don't have an account? <a href="{{ route('auth.signup') }}" class="text-blue-500 hover:underline transition ease-out duration-150">Sign up</a>
                </span>
            </div>
        </div>
    </div>
</div>

@endsection
