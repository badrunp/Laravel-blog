<div class="bg-red-500 fixed z-10 w-full top-0">
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 h-14 md:h-16">
        <div class="flex items-center h-full justify-between">
            <div class="hidden md:flex items-center h-full space-x-5">
                <a href="{{ route('home') }}" class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10 text-white text-opacity-80" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                    </svg>
                    <span class="hidden md:block text-2xl lg:text-3xl font-medium tracking-tight uppercase text-white -mt-1">Blog Post</span>
                </a>

                <ul class="hidden lg:flex items-center h-full space-x-2">
                    <li class="flex items-center">
                        <a class="block text-white text-opacity-80 font-medium text-sm  tracking-wide px-2 py-1 hover:bg-red-600 rounded transition ease-out duration-150 {{ request()->is('/') ? 'bg-red-600 text-opacity-100' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="flex items-center">
                        <a class="block text-white text-opacity-80 font-medium text-sm tracking-wide px-2 py-1 hover:bg-red-600 rounded transition ease-out duration-150 {{ request()->is('blog') ? 'bg-red-600 text-opacity-100' : '' }}" href="{{ route('blog') }}">Blog</a>
                    </li>
                </ul>
            </div>

            <div class="block md:hidden cursor-pointer" id="show-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" class="show-sidebar h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>

            <div class="flex items-center space-x-5">
                <div id="search-button" class="search-button flex md:hidden items-center cursor-pointer -mr-2">
                    <div class="search-button p-1 rounded-full flex items-center justify-center bg-red-600 w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="search-button h-5 w-5 absolute text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div id="search-box" class="relative hidden md:flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute ml-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    <input type="text" id="search" class="search rounded py-2 text-sm pr-2 pl-8 focus:outline-none bg-red-600 text-white focus:shadow-inner placeholder-white tracking-wide font-medium" placeholder="Search..." autocomplete="off" />
                    <div id="box-result-search" class="hidden absolute left-0 top-0 right-0 z-10 mt-10">
                        <div class="w-auto">
                            <div class="bg-white rounded shadow">
                                <div class="py-2">
                                    <div class="pb-2 px-2">
                                        <span class="text-sm text-gray-600 break-words tracking-wide leading-1 block">Search: <span id="text-search" class="text-sm font-medium"></span></span>
                                    </div>
                                    <div class="search-result">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="auth">
                    @auth
                    <ul class="relative">

                        <li>
                            <div class="dropdown-click flex items-center space-x-1">
                                <span class="text-white tracking-tight font-medium cursor-pointer flex space-x-1">
                                    {{ auth()->user()->username }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>

                            <ul class="menu-dropdown hidden absolute right-0 w-max rounded shadow mt-2 bg-white py-2">
                                <li class="main-menu-dropdown">
                                    <a href="{{ route('admin.blogIndex') }}" class="main-menu-dropdown py-2 px-6 flex items-center space-x-1 hover:bg-gray-200 cursor-pointer text-gray-500 transition ease-out duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="main-menu-dropdown h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <span class="main-menu-dropdown block text-base font-medium tracking-tight">Post</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="main-menu-dropdown py-2 px-6 flex items-center space-x-1 hover:bg-gray-200 cursor-pointer text-gray-500 transition ease-out duration-150" onclick="document.getElementById('logout').submit()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="main-menu-dropdown h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span class="main-menu-dropdownblock text-base font-medium tracking-tight">Logout</span>
                                    </a>
                                    <form id="logout" action="{{ route('auth.logout') }}" method="post">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @else
                    <ul class="flex space-x-2 items-center">
                        <li class="flex items-center">
                            <a class="py-2 px-4 bg-white rounded border border-transparent shadow-md text-xs md:text-xs font-medium hover:text-red-500 transition ease-out duration-150 focus:outline-none" href="{{ route('auth.login') }}">Login</a>
                        </li>
                        <li class="flex items-center">
                            <a class="py-2 px-4 bg-white rounded text-xs md:text-xs font-medium bg-opacity-40 text-white shadow-md border border-gray-100 focus:outline-none hover:bg-opacity-50 transition ease-out duration-150" href="{{ route('auth.signup') }}">Sign up</a>
                        </li>
                    </ul>
                    @endauth
                </div>  
            </div>
        </div>
    </div>
</div>

<div class="box-sidebar hidden fixed inset-0 bg-black bg-opacity-40 z-20" id="box-sidebar">
    <div class="bg-red-600 fixed left-0 top-0 bottom-0 shadow-md" style="width: 70%" id="sidebar">
        <div class="py-4 pl-3">
            <a href="#" class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white text-opacity-80" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                </svg>
                <span class="block text-2xl font-medium tracking-tight uppercase text-white -mt-1">Blog Post</span>
            </a>
        </div>
        <div class="relative">
            <ul class="flex flex-col">
                <li>
                    <a class="block text-base text-gray-100 py-2 tracking-wide hover:bg-red-400 pl-3" href="">Home</a>
                </li>
                <li>
                    <a class="block text-base text-gray-100 py-2 tracking-wide hover:bg-red-400 pl-3" href="">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</div>
