<!-- component -->

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
<script src="https://cdn.tiny.cloud/1/kidbho6ws2x58esyf7xh63cykfz1g1omfb9ke1ndospglezj/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/flowbite.css') }}">

<script type="application/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<style>
    /* Compiled dark classes from Tailwind */
    .dark .dark\:divide-gray-700> :not([hidden])~ :not([hidden]) {
        border-color: rgba(55, 65, 81);
    }

    .dark .dark\:bg-gray-50 {
        background-color: rgba(249, 250, 251);
    }

    .dark .dark\:bg-gray-100 {
        background-color: rgba(243, 244, 246);
    }

    .dark .dark\:bg-gray-600 {
        background-color: rgba(75, 85, 99);
    }

    .dark .dark\:bg-gray-700 {
        background-color: rgba(55, 65, 81);
    }

    .dark .dark\:bg-gray-800 {
        background-color: rgba(31, 41, 55);
    }

    .dark .dark\:bg-gray-900 {
        background-color: rgba(17, 24, 39);
    }

    .dark .dark\:bg-red-700 {
        background-color: rgba(185, 28, 28);
    }

    .dark .dark\:bg-green-700 {
        background-color: rgba(4, 120, 87);
    }

    .dark .dark\:hover\:bg-gray-200:hover {
        background-color: rgba(229, 231, 235);
    }

    .dark .dark\:hover\:bg-gray-600:hover {
        background-color: rgba(75, 85, 99);
    }

    .dark .dark\:hover\:bg-gray-700:hover {
        background-color: rgba(55, 65, 81);
    }

    .dark .dark\:hover\:bg-gray-900:hover {
        background-color: rgba(17, 24, 39);
    }

    .dark .dark\:border-gray-100 {
        border-color: rgba(243, 244, 246);
    }

    .dark .dark\:border-gray-400 {
        border-color: rgba(156, 163, 175);
    }

    .dark .dark\:border-gray-500 {
        border-color: rgba(107, 114, 128);
    }

    .dark .dark\:border-gray-600 {
        border-color: rgba(75, 85, 99);
    }

    .dark .dark\:border-gray-700 {
        border-color: rgba(55, 65, 81);
    }

    .dark .dark\:border-gray-900 {
        border-color: rgba(17, 24, 39);
    }

    .dark .dark\:hover\:border-gray-800:hover {
        border-color: rgba(31, 41, 55);
    }

    .dark .dark\:text-white {
        color: rgba(255, 255, 255);
    }

    .dark .dark\:text-gray-50 {
        color: rgba(249, 250, 251);
    }

    .dark .dark\:text-gray-100 {
        color: rgba(243, 244, 246);
    }

    .dark .dark\:text-gray-200 {
        color: rgba(229, 231, 235);
    }

    .dark .dark\:text-gray-400 {
        color: rgba(156, 163, 175);
    }

    .dark .dark\:text-gray-500 {
        color: rgba(107, 114, 128);
    }

    .dark .dark\:text-gray-700 {
        color: rgba(55, 65, 81);
    }

    .dark .dark\:text-gray-800 {
        color: rgba(31, 41, 55);
    }

    .dark .dark\:text-red-100 {
        color: rgba(254, 226, 226);
    }

    .dark .dark\:text-green-100 {
        color: rgba(209, 250, 229);
    }

    .dark .dark\:text-blue-400 {
        color: rgba(96, 165, 250);
    }

    .dark .group:hover .dark\:group-hover\:text-gray-500 {
        color: rgba(107, 114, 128);
    }

    .dark .group:focus .dark\:group-focus\:text-gray-700 {
        color: rgba(55, 65, 81);
    }

    .dark .dark\:hover\:text-gray-100:hover {
        color: rgba(243, 244, 246);
    }

    .dark .dark\:hover\:text-blue-500:hover {
        color: rgba(59, 130, 246);
    }

    /* Custom style */
    .header-right {
        width: calc(100% - 3.5rem);
    }

    .sidebar:hover {
        width: 16rem;
    }

    @media only screen and (min-width: 768px) {
        .header-right {
            width: calc(100% - 16rem);
        }
    }
</style>
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div
        class="flex flex-col flex-auto flex-shrink-0 min-h-screen antialiased text-black bg-white dark:bg-gray-700 dark:text-white">

        <!-- Header -->
        <div class="fixed z-10 flex items-center justify-between w-full text-white h-14">
            <div
                class="flex items-center justify-start pl-3 bg-blue-800 border-none md:justify-center w-14 md:w-64 h-14 dark:bg-gray-800">
                <img class="mr-2 overflow-hidden rounded-md w-7 h-7 md:w-10 md:h-10"
                    src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
                <span class="hidden md:block">ADMIN</span>
            </div>
            <div class="flex items-center justify-between bg-blue-800 h-14 dark:bg-gray-800 header-right">
                <div
                    class="flex items-center w-full max-w-xl p-2 mr-4 bg-white border border-gray-200 rounded shadow-sm">
                    <button class="outline-none focus:outline-none">
                        <svg class="w-5 h-5 text-gray-600 cursor-pointer" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <input type="search" name="" id="" placeholder="Search"
                        class="w-full pl-3 text-sm text-black bg-transparent outline-none focus:outline-none" />
                </div>
                <ul class="flex items-center">
                    <li>
                        <button aria-hidden="true" @click="toggleTheme"
                            class="p-2 text-gray-900 transition-colors duration-200 bg-blue-200 rounded-full shadow-md group hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 focus:outline-none">
                            <svg x-show="isDark" width="24" height="24"
                                class="text-gray-700 fill-current group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            <svg x-show="!isDark" width="24" height="24"
                                class="text-gray-700 fill-current group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </button>
                    </li>
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                    </li>
                    <li>
                        <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                            <span class="inline-flex mr-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Header -->

        <!-- Sidebar -->
        <div
            class="fixed left-0 z-10 flex flex-col h-full text-white transition-all duration-300 bg-blue-900 border-none top-14 w-14 hover:w-64 md:w-64 dark:bg-gray-900 sidebar">
            <div class="flex flex-col justify-between flex-grow overflow-x-hidden overflow-y-auto">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="hidden px-5 md:block">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 hover:border-blue-500 dark:hover:border-gray-800">
                            <span class="inline-flex items-center justify-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 hover:border-blue-500 dark:hover:border-gray-800">
                            <span class="inline-flex items-center justify-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Board</span>
                            <span
                                class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 hover:border-blue-500 dark:hover:border-gray-800">
                            <span class="inline-flex items-center justify-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 hover:border-blue-500 dark:hover:border-gray-800">
                            <span class="inline-flex items-center justify-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                            <span
                                class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                        </a>
                    </li>
                    <li class="hidden px-5 md:block">
                        <div class="flex flex-row items-center h-8 mt-5">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 hover:border-blue-500 dark:hover:border-gray-800">
                            <span class="inline-flex items-center justify-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 hover:border-blue-500 dark:hover:border-gray-800">
                            <span class="inline-flex items-center justify-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                        </a>
                    </li>
                </ul>
                <p class="hidden px-5 py-3 text-xs text-center mb-14 md:block">Copyright @2021</p>
            </div>
        </div>
        <!-- ./Sidebar -->

        <div class="h-full mb-10 ml-14 mt-14 md:ml-64">

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 lg:grid-cols-4">
                <div
                    class="flex items-center justify-between p-3 font-medium text-white bg-blue-500 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                    <div
                        class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">1,257</p>
                        <p>Visitors</p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-between p-3 font-medium text-white bg-blue-500 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                    <div
                        class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">557</p>
                        <p>Orders</p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-between p-3 font-medium text-white bg-blue-500 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                    <div
                        class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">$11,257</p>
                        <p>Sales</p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-between p-3 font-medium text-white bg-blue-500 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                    <div
                        class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">$75,257</p>
                        <p>Balances</p>
                    </div>
                </div>
            </div>
            <!-- ./Statistics Cards -->

            <div class="grid grid-cols-1 gap-4 p-4 lg:grid-cols-2">

                <!-- Social Traffic -->
                <div
                    class="relative flex flex-col w-full min-w-0 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                    <div class="px-0 mb-0 border-0 rounded-t">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h3 class="text-base font-semibold text-gray-900 dark:text-gray-50">Social Traffic</h3>
                            </div>
                            <div class="relative flex-1 flex-grow w-full max-w-full text-right">
                                <button
                                    class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-blue-500 rounded outline-none dark:bg-gray-100 active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 focus:outline-none"
                                    type="button">See all</button>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Referral</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Visitors</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap min-w-140-px">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Facebook</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            5,480</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">70%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                        <div style="width: 70%"
                                                            class="flex flex-col justify-center text-center text-white bg-blue-600 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Twitter</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            3,380</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">40%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                        <div style="width: 40%"
                                                            class="flex flex-col justify-center text-center text-white bg-blue-500 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Instagram</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            4,105</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">45%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-pink-200 rounded">
                                                        <div style="width: 45%"
                                                            class="flex flex-col justify-center text-center text-white bg-pink-500 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Google</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            4,985</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">60%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-red-200 rounded">
                                                        <div style="width: 60%"
                                                            class="flex flex-col justify-center text-center text-white bg-red-500 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Linkedin</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            2,250</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">30%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                        <div style="width: 30%"
                                                            class="flex flex-col justify-center text-center text-white bg-blue-700 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->

                <!-- Recent Activities -->
                <div
                    class="relative flex flex-col w-full min-w-0 break-words rounded shadow-lg bg-gray-50 dark:bg-gray-800">
                    <div class="px-0 mb-0 border-0 rounded-t">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h3 class="text-base font-semibold text-gray-900 dark:text-gray-50">Recent Activities
                                </h3>
                            </div>
                            <div class="relative flex-1 flex-grow w-full max-w-full text-right">
                                <button
                                    class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-blue-500 rounded outline-none dark:bg-gray-100 active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 focus:outline-none"
                                    type="button">See all</button>
                            </div>
                        </div>
                        <div class="block w-full">
                            <div
                                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                Today
                            </div>
                            <ul class="my-1">
                                <li class="flex px-4">
                                    <div class="flex-shrink-0 my-2 mr-3 bg-indigo-500 rounded-full w-9 h-9">
                                        <svg class="fill-current w-9 h-9 text-indigo-50" viewBox="0 0 36 36">
                                            <path
                                                d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex items-center flex-grow py-2 text-sm text-gray-600 border-b border-gray-100 dark:border-gray-400 dark:text-gray-100">
                                        <div class="flex items-center justify-between flex-grow">
                                            <div class="self-center">
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Nick Mark</a> mentioned <a
                                                    class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Sara Smith</a> in a new post
                                            </div>
                                            <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                    href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="transition-transform duration-500 ease-in-out transform">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-4">
                                    <div class="flex-shrink-0 my-2 mr-3 bg-red-500 rounded-full w-9 h-9">
                                        <svg class="fill-current w-9 h-9 text-red-50" viewBox="0 0 36 36">
                                            <path
                                                d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex items-center flex-grow py-2 text-sm text-gray-600 border-gray-100 dark:text-gray-50">
                                        <div class="flex items-center justify-between flex-grow">
                                            <div class="self-center">
                                                The post <a
                                                    class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Post Name</a> was removed by
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Nick Mark</a>
                                            </div>
                                            <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                    href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="transition-transform duration-500 ease-in-out transform">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div
                                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                Yesterday
                            </div>
                            <ul class="my-1">
                                <li class="flex px-4">
                                    <div class="flex-shrink-0 my-2 mr-3 bg-green-500 rounded-full w-9 h-9">
                                        <svg class="fill-current w-9 h-9 text-light-blue-50" viewBox="0 0 36 36">
                                            <path
                                                d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex items-center flex-grow py-2 text-sm text-gray-600 border-gray-100 dark:text-gray-50">
                                        <div class="flex items-center justify-between flex-grow">
                                            <div class="self-center">
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">240+</a> users have
                                                subscribed to <a
                                                    class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Newsletter #1</a>
                                            </div>
                                            <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                    href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="transition-transform duration-500 ease-in-out transform">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ./Recent Activities -->
            </div>

            <!-- Task Summaries -->
            <div class="grid grid-cols-1 gap-4 p-4 text-black md:grid-cols-2 xl:grid-cols-3 dark:text-white">
                <div class="md:col-span-2 xl:col-span-3">
                    <h3 class="text-lg font-semibold">Task summaries of recent sprints</h3>
                </div>
                <div class="md:col-span-2 xl:col-span-1">
                    <div class="p-3 bg-gray-200 rounded dark:bg-gray-800">
                        <div class="flex justify-between py-1 text-black dark:text-white">
                            <h3 class="text-sm font-semibold">Tasks in TO DO</h3>
                            <svg class="h-4 text-gray-600 cursor-pointer fill-current dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                            </svg>
                        </div>
                        <div class="mt-2 text-sm text-black dark:text-gray-50">
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Delete all references from the wiki</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Remove analytics code</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Do a mobile first layout
                                <div
                                    class="flex items-start justify-between mt-2 ml-2 text-gray-500 dark:text-gray-200">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        3/5
                                    </span>
                                    <img src="https://i.imgur.com/OZaT7jl.png" class="rounded-full" />
                                </div>
                            </div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Check the meta tags</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Think more tasks for this example
                                <div
                                    class="flex items-start justify-between mt-2 ml-2 text-gray-500 dark:text-gray-200">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        0/3
                                    </span>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="p-3 bg-gray-200 rounded dark:bg-gray-800">
                        <div class="flex justify-between py-1 text-black dark:text-white">
                            <h3 class="text-sm font-semibold">Tasks in DEVELOPMENT</h3>
                            <svg class="h-4 text-gray-600 cursor-pointer fill-current dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                            </svg>
                        </div>
                        <div class="mt-2 text-sm text-black dark:text-gray-50">
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Delete all references from the wiki</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Remove analytics code</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Do a mobile first layout
                                <div class="flex items-start justify-between mt-2 ml-2 text-xs text-white">
                                    <span class="flex items-center p-1 text-xs bg-pink-600 rounded">
                                        <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Check the meta tags</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Think more tasks for this example
                                <div class="flex items-start justify-between mt-2 ml-2 text-gray-500">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        0/3
                                    </span>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="p-3 bg-gray-200 rounded dark:bg-gray-800">
                        <div class="flex justify-between py-1 text-black dark:text-white">
                            <h3 class="text-sm font-semibold">Tasks in QA</h3>
                            <svg class="h-4 text-gray-600 cursor-pointer fill-current dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                            </svg>
                        </div>
                        <div class="mt-2 text-sm text-black dark:text-gray-50">
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Delete all references from the wiki</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Remove analytics code</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Do a mobile first layout</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Check the meta tags</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Think more tasks for this example
                                <div
                                    class="flex items-start justify-between mt-2 ml-2 text-gray-500 dark:text-gray-200">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        0/3
                                    </span>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Task Summaries -->

            <!-- Client Table -->
            <div class="mx-4 mt-4">
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Client</th>
                                    <th class="px-4 py-3">Amount</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                <tr
                                    class="text-gray-700 bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Hans Burger</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$855.85</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Approved </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">15-01-2021</td>
                                </tr>
                                <tr
                                    class="text-gray-700 bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;facepad=3&amp;fit=facearea&amp;s=707b9c33066bf8808c934c8ab394dff6"
                                                    alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Jolina Angelie</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Unemployed</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$369.75</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">
                                            Pending </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">23-03-2021</td>
                                </tr>
                                <tr
                                    class="text-gray-700 bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;s=b8377ca9f985d80264279f277f3a67f5"
                                                    alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Dave Li</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Influencer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$775.45</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                            Expired </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">09-02-2021</td>
                                </tr>
                                <tr
                                    class="text-gray-700 bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Rulia Joberts</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Actress</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$1276.75</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Approved </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">17-04-2021</td>
                                </tr>
                                <tr
                                    class="text-gray-700 bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Hitney Wouston</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Singer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$863.45</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                            Denied </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">11-01-2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div
                        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                        <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                            aria-label="Previous">
                                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 text-white transition-colors duration-150 bg-blue-600 border border-r-0 border-blue-600 rounded-md dark:text-gray-800 dark:bg-gray-100 dark:border-gray-100 focus:outline-none focus:shadow-outline-purple">3</button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                                    </li>
                                    <li>
                                        <span class="px-3 py-1">...</span>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                                    </li>
                                    <li>
                                        <button
                                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                            aria-label="Next">
                                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                                <path
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </span>
                    </div>
                </div>
            </div>
            <!-- ./Client Table -->

            <!-- Contact Form -->
            <div class="mx-4 mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-800 sm:text-5xl dark:text-white">
                            Get in touch</h1>
                        <p class="mt-2 text-lg font-medium text-gray-600 text-normal sm:text-2xl dark:text-gray-400">
                            Fill in the form to submit any query</p>

                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="w-40 ml-4 font-semibold tracking-wide text-md">Dhaka, Street, State, Postal
                                Code</div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div class="w-40 ml-4 font-semibold tracking-wide text-md">+880 1234567890</div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div class="w-40 ml-4 font-semibold tracking-wide text-md">info@demo.com</div>
                        </div>
                    </div>
                    <form class="flex flex-col justify-center p-6">
                        <div class="flex flex-col">
                            <label for="name" class="hidden">Full Name</label>
                            <input type="name" name="name" id="name" placeholder="Full Name"
                                class="px-3 py-3 mt-2 font-semibold text-gray-800 bg-white border border-gray-400 rounded-lg w-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 focus:border-blue-500 focus:outline-none" />
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email"
                                class="px-3 py-3 mt-2 font-semibold text-gray-800 bg-white border border-gray-400 rounded-lg w-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 focus:border-blue-500 focus:outline-none" />
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="tel" class="hidden">Number</label>
                            <input type="tel" name="tel" id="tel" placeholder="Telephone Number"
                                class="px-3 py-3 mt-2 font-semibold text-gray-800 bg-white border border-gray-400 rounded-lg w-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 focus:border-blue-500 focus:outline-none" />
                        </div>

                        <button type="submit"
                            class="px-6 py-3 mt-4 font-bold text-white transition duration-300 ease-in-out bg-blue-600 rounded-lg md:w-32 dark:bg-gray-100 dark:text-gray-800 hover:bg-blue-500 dark:hover:bg-gray-200">Submit</button>
                    </form>
                </div>
            </div>
            <!-- ./Contact Form -->

            <!-- External resources -->
            <div class="mx-4 mt-8">
                <div
                    class="p-4 border border-blue-500 rounded-lg shadow-md bg-blue-50 dark:bg-gray-800 dark:text-gray-50 dark:border-gray-500">
                    <h4 class="text-lg font-semibold">Have taken ideas & reused components from the following
                        resources:</h4>
                    <ul>
                        <li class="mt-3">
                            <a class="flex items-center text-blue-700 dark:text-gray-100"
                                href="https://tailwindcomponents.com/component/sidebar-navigation-1" target="_blank">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="transition-transform duration-500 ease-in-out transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="inline-flex pl-2">Sidebar Navigation</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a class="flex items-center text-blue-700 dark:text-gray-100"
                                href="https://tailwindcomponents.com/component/contact-form-1" target="_blank">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="transition-transform duration-500 ease-in-out transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="inline-flex pl-2">Contact Form</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a class="flex items-center text-blue-700 dark:text-gray-100"
                                href="https://tailwindcomponents.com/component/trello-panel-clone" target="_blank">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="transition-transform duration-500 ease-in-out transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="inline-flex pl-2">Section: Task Summaries</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a class="flex items-center text-blue-700 dark:text-gray-100"
                                href="https://windmill-dashboard.vercel.app/" target="_blank">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="transition-transform duration-500 ease-in-out transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="inline-flex pl-2">Section: Client Table</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a class="flex items-center text-blue-700 dark:text-gray-100"
                                href="https://demos.creative-tim.com/notus-js/pages/admin/dashboard.html"
                                target="_blank">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="transition-transform duration-500 ease-in-out transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="inline-flex pl-2">Section: Social Traffic</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a class="flex items-center text-blue-700 dark:text-gray-100"
                                href="https://mosaic.cruip.com" target="_blank">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="transition-transform duration-500 ease-in-out transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="inline-flex pl-2">Section: Recent Activities</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./External resources -->
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
<script>
    const setup = () => {
        const getTheme = () => {
            if (window.localStorage.getItem('dark')) {
                return JSON.parse(window.localStorage.getItem('dark'))
            }
            return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
        }

        const setTheme = (value) => {
            window.localStorage.setItem('dark', value)
        }

        return {
            loading: true,
            isDark: getTheme(),
            toggleTheme() {
                this.isDark = !this.isDark
                setTheme(this.isDark)
            },
        }
    }
</script>
