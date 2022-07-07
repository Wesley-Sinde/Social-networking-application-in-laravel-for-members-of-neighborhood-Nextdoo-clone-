<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://giphy.com/static/img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="google-site-verification" content="0sGHmxbmgrjs4YBWZTVE1zUe8A8zVjZZ5NiEQJ8hZrY" />
    @if (isset(Auth::User()->id))
        <meta name="user-id" content="{{ Auth::user()->id }}">
    @endif
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>

    //
    <script src="{{ asset('js/share.js') }}" defer></script>

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
    header('Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure');
    ?>
</head>

<body class="h-screen font-sans antialiased leading-none bg-gray-100 dark:bg-gray-900">

    <div id="app">
        <div id="">
            <header
                class="fixed top-0 z-50 flex flex-none w-full py-2 mx-auto mt-0 bg-gray-200 border-b border-gray-300 dark:border-gray-200 dark:bg-gray-800">
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
                        <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>

                    </button>



                    <a href="#"
                        class="flex items-center self-center text-xl font-semibold whitespace-nowrap dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38"
                            height="28" viewBox="0 0 48 48" style=" fill:#000000;">
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
                        <button type="button" class="flex text-sm rounded-full focus:ring-1 focus:ring-gray-300 "
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            @guest
                                <img width=85% class="rounded-full" src="{{ asset('images/user.png') }}"
                                    alt="user photo">
                            @else
                                <img class="w-40 rounded-full md:w-20"
                                    src="{{ asset('images/user/' . Auth::User()->avatar) }}" alt="user photo">
                            </button>
                        @endguest
                        <div class="z-50 hidden my-0 text-base list-none bg-gray-100 divide-y divide-gray-100 rounded shadow d dark:divide-gray-600 dark:bg-gray-900"
                            id="dropdown">
                            @guest
                            @else
                                <div
                                    class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                                        src="{{ asset('images/user/' . Auth::User()->avatar) }}"
                                        alt="{{ Auth::user()->name }}">

                                    <div class="mx-1">
                                        <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                            {{ Auth::user()->name }}</h1>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}
                                        </p>
                                    </div>
                                </div>

                            @endguest
                            <ul class="py-1 bg-gray-100 dark:bg-gray-900" aria-labelledby="dropdown">
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white  {{ request()->segment(1) == 'login' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : 'wwww' }}">
                                            login
                                        </a>
                                    </li>
                                @else
                                    {{-- <hr class="border-gray-200 dark:border-gray-700 ">
                                    <li> --}}

                                    <a href="{{ route('profile') }}"
                                        class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z"
                                                fill="currentColor"></path>
                                        </svg>

                                        <span
                                            class="mx-1 {{ request()->segment(1) == 'profile' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">
                                            view profile
                                        </span>
                                    </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 19H3C1.89543 19 1 18.1046 1 17V16H3V7C3 5.89543 3.89543 5 5 5H19C20.1046 5 21 5.89543 21 7V16H23V17C23 18.1046 22.1046 19 21 19ZM5 7V16H19V7H5Z"
                                                    fill="currentColor"></path>
                                            </svg>

                                            <span class="mx-1">
                                                Keyboard shortcuts
                                            </span>
                                        </a>
                                    </li>
                                    <hr class="border-gray-200 dark:border-gray-700 ">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 22C15.8082 21.9947 14.0267 20.2306 14 18.039V16H9.99996V18.02C9.98892 20.2265 8.19321 22.0073 5.98669 22C3.78017 21.9926 1.99635 20.1999 2.00001 17.9934C2.00367 15.7868 3.79343 14 5.99996 14H7.99996V9.99999H5.99996C3.79343 9.99997 2.00367 8.21315 2.00001 6.00663C1.99635 3.8001 3.78017 2.00736 5.98669 1.99999C8.19321 1.99267 9.98892 3.77349 9.99996 5.97999V7.99999H14V5.99999C14 3.79085 15.7908 1.99999 18 1.99999C20.2091 1.99999 22 3.79085 22 5.99999C22 8.20913 20.2091 9.99999 18 9.99999H16V14H18C20.2091 14 22 15.7909 22 18C22 20.2091 20.2091 22 18 22ZM16 16V18C16 19.1046 16.8954 20 18 20C19.1045 20 20 19.1046 20 18C20 16.8954 19.1045 16 18 16H16ZM5.99996 16C4.89539 16 3.99996 16.8954 3.99996 18C3.99996 19.1046 4.89539 20 5.99996 20C6.53211 20.0057 7.04412 19.7968 7.42043 19.4205C7.79674 19.0442 8.00563 18.5321 7.99996 18V16H5.99996ZM9.99996 9.99999V14H14V9.99999H9.99996ZM18 3.99999C17.4678 3.99431 16.9558 4.2032 16.5795 4.57952C16.2032 4.95583 15.9943 5.46784 16 5.99999V7.99999H18C18.5321 8.00567 19.0441 7.79678 19.4204 7.42047C19.7967 7.04416 20.0056 6.53215 20 5.99999C20.0056 5.46784 19.7967 4.95583 19.4204 4.57952C19.0441 4.2032 18.5321 3.99431 18 3.99999ZM5.99996 3.99999C5.4678 3.99431 4.95579 4.2032 4.57948 4.57952C4.20317 4.95583 3.99428 5.46784 3.99996 5.99999C3.99428 6.53215 4.20317 7.04416 4.57948 7.42047C4.95579 7.79678 5.4678 8.00567 5.99996 7.99999H7.99996V5.99999C8.00563 5.46784 7.79674 4.95583 7.42043 4.57952C7.04412 4.2032 6.53211 3.99431 5.99996 3.99999Z"
                                                    fill="currentColor"></path>
                                            </svg>

                                            <span class="mx-1">
                                                Company profile
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4 19H2C2 15.6863 4.68629 13 8 13C11.3137 13 14 15.6863 14 19H12C12 16.7909 10.2091 15 8 15C5.79086 15 4 16.7909 4 19ZM19 16H17V13H14V11H17V8H19V11H22V13H19V16ZM8 12C5.79086 12 4 10.2091 4 8C4 5.79086 5.79086 4 8 4C10.2091 4 12 5.79086 12 8C11.9972 10.208 10.208 11.9972 8 12ZM8 6C6.9074 6.00111 6.01789 6.87885 6.00223 7.97134C5.98658 9.06383 6.85057 9.9667 7.94269 9.99912C9.03481 10.0315 9.95083 9.1815 10 8.09V8.49V8C10 6.89543 9.10457 6 8 6Z"
                                                    fill="currentColor"></path>
                                            </svg>

                                            <span class="mx-1">
                                                Invite colleagues
                                            </span>
                                        </a>
                                    </li>
                                    <hr class="border-gray-200 dark:border-gray-700 ">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 22C6.47967 21.9939 2.00606 17.5203 2 12V11.8C2.10993 6.30452 6.63459 1.92794 12.1307 2.00087C17.6268 2.07379 22.0337 6.56887 21.9978 12.0653C21.9619 17.5618 17.4966 21.9989 12 22ZM11.984 20H12C16.4167 19.9956 19.9942 16.4127 19.992 11.996C19.9898 7.57928 16.4087 3.99999 11.992 3.99999C7.57528 3.99999 3.99421 7.57928 3.992 11.996C3.98979 16.4127 7.56729 19.9956 11.984 20ZM13 18H11V16H13V18ZM13 15H11C10.9684 13.6977 11.6461 12.4808 12.77 11.822C13.43 11.316 14 10.88 14 9.99999C14 8.89542 13.1046 7.99999 12 7.99999C10.8954 7.99999 10 8.89542 10 9.99999H8V9.90999C8.01608 8.48093 8.79333 7.16899 10.039 6.46839C11.2846 5.76778 12.8094 5.78493 14.039 6.51339C15.2685 7.24184 16.0161 8.57093 16 9.99999C15.9284 11.079 15.3497 12.0602 14.44 12.645C13.6177 13.1612 13.0847 14.0328 13 15Z"
                                                    fill="currentColor"></path>
                                            </svg>

                                            <span class="mx-1">
                                                Help
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z"
                                                    fill="currentColor"></path>
                                            </svg>

                                            <span class="mx-1">
                                                Sign Out
                                            </span>
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
                                    class="block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0 dark:text-white  {{ request()->segment(1) == 'home' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="/About"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  {{ request()->segment(1) == 'about' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">About</a>
                            </li>
                            <li>
                                <a href="/Services"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  {{ request()->segment(1) == 'Services' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->segment(1) == 'blog' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Contact') }}"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  {{ request()->segment(1) == 'Contact' ? 'text-blue-700 hover:text-blue-700 dark:text-blue-500' : '' }}">Contact</a>
                            </li>
                            <li>
                                <div
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">


                                    <button id="theme-toggle" type="button"
                                        class="mx-2 text-sm text-gray-500 rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700">
                                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
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

    <style>
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #CBD5E0;
        }

        ::-webkit-scrollbar-thumb {
            background: #2D3748;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #718096;
        }
    </style>
</body>

</html>
