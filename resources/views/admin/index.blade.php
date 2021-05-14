@extends('layouts.app')

@section('title', 'Admin - All Post')
@section('content')
<div class="container mx-auto py-20 relative antialiased    ">
    <div class="max-w-xs sm:max-w-sm mx-auto md:max-w-none md:w-10/12 lg:w-10/12">
        <div class="bg-white shadow rounded mx-auto p-6">
            <div class="mb-6">
                <div class="flex items-center justify-between">
                    <h1 class="text-gray-300 font-medium text-lg lg:text-3xl">All Post</h1>
                    <div class="flex items-center space-x-2">
                        <form class="search-post flex items-center">
                            <input type="text" class="border border-gray-300 focus:outline-none py-2 px-2 text-sm rounded-tl rounded-bl" placeholder="Search Post..." />
                            <button class="p-2 rounded-tr rounded-br bg-gray-600 border-b border-r border-t border-gray-600 -ml-1 hover:bg-gray-700 transition ease-out duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                        <a href="{{ route('admin.blogCreate') }}" class="block bg-blue-500 p-2 rounded hover:bg-blue-600 transition ease-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">No</th>
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">Title</th>
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">Slug</th>
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">body</th>
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">Author</th>
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">Tag</th>
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">Image</th>
                            <th class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-600">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">1</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Title 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Slug 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Content 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Author 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Tag 1 test</td>
                            <td class="flex items-center py-3 px-5 space-x-2">
                                <button class="py-2 px-3 bg-red-500 text-white text-xs rounded font-medium hover:bg-red-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="py-2 px-3 bg-green-500 text-white text-xs rounded font-medium hover:bg-green-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">1</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Title 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Slug 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Content 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Author 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Tag 1 test</td>
                            <td class="flex items-center py-3 px-5 space-x-2">
                                <button class="py-2 px-3 bg-red-500 text-white text-xs rounded font-medium hover:bg-red-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="py-2 px-3 bg-green-500 text-white text-xs rounded font-medium hover:bg-green-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">1</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Title 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Slug 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Content 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Author 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Tag 1 test</td>
                            <td class="flex items-center py-3 px-5 space-x-2">
                                <button class="py-2 px-3 bg-red-500 text-white text-xs rounded font-medium hover:bg-red-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="py-2 px-3 bg-green-500 text-white text-xs rounded font-medium hover:bg-green-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">1</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Title 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Slug 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Content 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Author 1 test</td>
                            <td class="text-sm py-3 px-5 tracking-wide leading-5 text-gray-400 font-normal">Tag 1 test</td>
                            <td class="flex items-center py-3 px-5 space-x-2">
                                <button class="py-2 px-3 bg-red-500 text-white text-xs rounded font-medium hover:bg-red-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="py-2 px-3 bg-green-500 text-white text-xs rounded font-medium hover:bg-green-600 transition duration-150 ease-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
