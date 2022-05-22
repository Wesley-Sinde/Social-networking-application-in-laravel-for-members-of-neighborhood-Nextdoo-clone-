<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://giphy.com/static/img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.tiny.cloud/1/kidbho6ws2x58esyf7xh63cykfz1g1omfb9ke1ndospglezj/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/flowbite.css') }}">

    <script type="application/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> --}}




    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    <script type="application/javascript">
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <?php
    header('Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure');
    ?>
</head>

<body class="h-screen font-sans antialiased leading-none bg-gray-100 dark:bg-gray-900">

    <div id="app">
        <div id="">
            <header
                class="fixed top-0 z-50 flex flex-none w-full mx-auto mt-0 bg-gray-200 border-b border-gray-300 dark:border-gray-200 py-2 dark:bg-gray-800">
                <div class="flex items-center justify-between w-full max-w-4xl px-3 mx-auto lg:px-4">


                    <button type="button"
                        class="left-0 flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 lg:hidden"
                        aria-controls="sidebar" data-collapse-toggle="sidebar">

                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>

                    </button>



                    <a href="#"
                        class="flex items-center self-center text-xl font-semibold whitespace-nowrap dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="28"
                            viewBox="0 0 48 48" style=" fill:#000000;">
                            <path fill="#7cb342"
                                d="M38,6H10c-2.209,0-4,1.791-4,4v28c0,2.209,1.791,4,4,4h28c2.209,0,4-1.791,4-4V10 C42,7.791,40.209,6,38,6z">
                            </path>
                            <path fill="#aeea00"
                                d="M42,18v11.5c-1.43,2.67-4.26,4.5-7.5,4.5c-3.82,0-7.05-2.52-8.13-6h-4.74c-1.08,3.48-4.31,6-8.13,6 c-3.24,0-6.07-1.83-7.5-4.5V18c0-2,0.99-6,3-6c1,0,1.94,1.44,2.52,2.1C11.55,13.21,11.21,10,13,10c3,0,5,8,11,8s8-8,11-8 c1.79,0,1.45,3.21,1.48,4.1C37.06,13.44,38,12,39,12C41.01,12,42,16,42,18z">
                            </path>
                            <path fill="#fafafa"
                                d="M34.5,31L34.5,31c-3.038,0-5.5-2.462-5.5-5.5v-3c0-3.038,2.462-5.5,5.5-5.5h0 c3.038,0,5.5,2.462,5.5,5.5v3C40,28.538,37.538,31,34.5,31z">
                            </path>
                            <path fill="#616161"
                                d="M36,22.5v3c0,1.38-1.12,2.5-2.5,2.5S31,26.88,31,25.5v-2.59c0.16,0.06,0.32,0.09,0.5,0.09 c0.83,0,1.5-0.67,1.5-1.5c0-0.51-0.25-0.96-0.64-1.22C32.7,20.1,33.09,20,33.5,20C34.88,20,36,21.12,36,22.5z">
                            </path>
                            <path fill="#fafafa"
                                d="M13.5,31L13.5,31C10.462,31,8,28.538,8,25.5v-3c0-3.038,2.462-5.5,5.5-5.5h0 c3.038,0,5.5,2.462,5.5,5.5v3C19,28.538,16.538,31,13.5,31z">
                            </path>
                            <path fill="#616161"
                                d="M17,22.5v3c0,1.38-1.12,2.5-2.5,2.5S12,26.88,12,25.5v-2.59c0.16,0.06,0.32,0.09,0.5,0.09 c0.83,0,1.5-0.67,1.5-1.5c0-0.51-0.25-0.96-0.64-1.22C13.7,20.1,14.09,20,14.5,20C15.88,20,17,21.12,17,22.5z">
                            </path>
                            <circle cx="24" cy="30" r="3" fill="#ef6c00"></circle>
                            <path fill="#f9a825" d="M24,26c-2.209,0-4,1.791-4,4l4,1l4-1C28,27.791,26.209,26,24,26z">
                            </path>
                            <path fill="#ffd54f"
                                d="M24.5,29h-1c-0.552,0-1-0.448-1-1v0c0-0.552,0.448-1,1-1h1c0.552,0,1,0.448,1,1v0 C25.5,28.552,25.052,29,24.5,29z">
                            </path>
                        </svg>
                        <span
                            class="self-center text-xl font-semibold text-gray-600 whitespace-nowrap dark:text-gray-400 hover:text-blue-300 ">
                            <a href="{{ url('/') }}" class="text-gray-600 dark:text-gray-400 hover:text-blue-300">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </span>
                    </a>



                    <div class="flex items-center order-2 m-auto mt-0">
                        <button type="button"
                            class="flex mr-0 text-sm rounded-full md:mr-3 focus:ring-1 focus:ring-gray-300 "
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            @guest
                                <img width=85% class="rounded-full" src="{{ asset('images/user.png') }}"
                                    alt="user photo">
                            @else
                                <img width=85% class="rounded-full " src="{{ asset('images/user.png') }}"
                                    alt="user photo">
                            </button>
                        @endguest
                        <div class="z-50 hidden my-0 text-base list-none bg-gray-100 divide-y divide-gray-100 rounded shadow d dark:divide-gray-600 dark:bg-gray-900"
                            id="dropdown">
                            @guest
                            @else
                                <div class="px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                    <span
                                        class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                    <span
                                        class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}
                                    </span>
                                </div>

                            @endguest
                            <ul class="py-1 bg-gray-100 dark:bg-gray-900" aria-labelledby="dropdown">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                </li>
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white  {{ request()->segment(1) == 'login' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : 'wwww' }}">
                                            login
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white  {{ request()->segment(1) == 'Earnings' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">
                                            Earnings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/Profile') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white  {{ request()->segment(1) == 'Profile' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="hidden">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>
                                @endguest
                            </ul>
                        </div>
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 pt-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>





                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                        id="mobile-menu-2">
                        <ul class="flex flex-col md:flex-row md:space-x-8 md:text-sm md:font-medium">


                            <li>
                                <a href="{{ url('/') }}"
                                    class="block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0 dark:text-white  {{ request()->segment(1) == '' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="/About"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  {{ request()->segment(1) == 'about' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">About</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  {{ request()->segment(1) == 'Services' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->segment(1) == 'blog' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  {{ request()->segment(1) == 'Contact' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">Contact</a>
                            </li>
                            <li>
                                <div
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">

                                    <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                                        class="text-sm text-gray-500 rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700">
                                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                            </path>
                                        </svg>
                                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div id="tooltip-toggle" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                        Toggle dark mode
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </li>
                    </div>


                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div> --}}
                    </div>
            </header>
        </div>
        <div class="h-13">
        </div>

        <main class="py-12">
            @yield('content')
        </main>
    </div>

    <div>
        @include('layouts.footer')
    </div>
</body>

</html>
