@extends('layouts.app')
@section('content')
    <div class="flex">

        @include('layouts.asidenav')

        <div class="">
            <ol class="flex pl-8 text-gray-800 breadcrumb dark:text-gray-300">
                <li><a href="/" class=" hover:underline hover:text-yellow-400"><i
                            class="fa fa-dashboard"></i>Dashboard</a>
                </li>
                <?php $segments = '';
                $toEnd = count(Request::segments());
                ?>
                @foreach (Request::segments() as $segment)
                    <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                        <path fill-rule="evenodd"
                            d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <?php $segments .= '/' . $segment;
                            
                            if (0 === --$toEnd) { ?>
                    <li>
                        <a class="text-blue-400 hover:underline hover:text-yellow-400"
                            href="{{ $segments }}">{{ $segment }}</a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a class=" hover:underline hover:text-yellow-400" href="{{ $segments }}">{{ $segment }}</a>
                    </li>
                    <?php }                            
                            ?>
                @endforeach
            </ol>
            <main class="flex m-4 text-gray-800 bg-gray-200 dark:bg-gray-800 dark:text-yellow-300">
                {{-- <section class="flex flex-col w-1/12 bg-gray-200 dark:bg-gray-900 rounded-l-3xl">
                <div class="w-16 p-4 mx-auto text-white rounded-2xl dark:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                    </svg>
                </div>
                <nav class="relative flex flex-col items-center py-4">
                    <a href="#" class="relative w-16 p-4 mb-4 text-gray-700 dark:text-gray-200 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                        </svg>
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 p-2 text-white bg-blue-600 rounded-full -top-1 -right-1">3</span>
                    </a>
                    <a href="#" class="w-16 p-4 mb-4 text-gray-700 border rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </a>
                    <a href="#" class="w-16 p-4 mb-4 text-gray-700 border rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </a>
                    <a href="#" class="w-16 p-4 mb-4 text-gray-700 border rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                    </a>
                    <a href="#" class="w-16 p-4 mb-24 text-gray-700 border rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                    <a href="#" class="w-16 p-4 text-gray-700 border rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                </nav>
            </section> --}}

                <section class="flex flex-col w-4/12 h-screen pt-3 overflow-y-scroll">
                    <label class="px-3 pb-3 border-b-2 border-gray-500">
                        <input
                            class="w-full p-4 text-gray-500 transition duration-200 bg-gray-100 rounded-lg dark:bg-gray-600 focus:outline-none focus:ring-2 dark:text-gray-200"
                            placeholder="Search..." />
                    </label>

                    <ul class="mt-6">
                        <li class="px-3 py-5 transition border-b border-gray-500 hover:bg-indigo-100 ">
                            <span class="flex">

                                <img class="w-8 h-8 rounded-full" src="{{ asset('images/user.png') }}" alt="user photo">
                                <a href="#" class="flex items-center justify-between">
                                    <h3 class="flex-wrap text-sm font-semibold">Akhil Gautam</h3>
                                    <p class="text-gray-400 text-md">23m ago</p>
                                </a>
                            </span>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b border-gray-500 hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b border-gray-500 hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b border-gray-500 hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 text-white bg-indigo-600 border-b">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-md">23m ago</p>
                            </a>
                            <div class="text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                        <li class="px-3 py-5 transition border-b hover:bg-indigo-100">
                            <a href="#" class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                                <p class="text-gray-400 text-md">23m ago</p>
                            </a>
                            <div class="italic text-gray-400 text-md">You have been invited!</div>
                        </li>
                    </ul>
                </section>
                <section class="sticky flex flex-col w-full p-4 rounded-r-3xl">
                    <div class="items-center mb-3 border-b-2 border-gray-500">
                        <div class="flex items-center pb-5">
                            <div class="w-12 h-12 overflow-hidden rounded-full">
                                <img src="https://bit.ly/2KfKgdy" loading="lazy" class="object-cover w-full h-full" />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-lg font-semibold">
                                    Akhil Gautam
                                </h3>
                                <p class="text-gray-400 text-light">
                                    akhil.gautam123@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <ul class="flex space-x-4 text-gray-400">
                                <li class="w-6 h-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                    </svg>
                                </li>
                                <li class="w-6 h-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </li>

                                <li class="w-6 h-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                    </svg>
                                </li>
                                <li class="w-6 h-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </li>
                                <li class="w-6 h-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <section>
                        <h1 class="text-2xl font-bold">We need UI/UX designer</h1>
                        <article class="mt-8 leading-7 tracking-wider text-gray-500">
                            <p>Hi Akhil,</p>
                            <p>Design and develop enterprise-facing UI and consumer-facing UI as well as
                                REST API
                                backends.Work with
                                Product Managers and User Experience designers to create an appealing user experience for
                                desktop
                                web and
                                mobile web.</p>
                            <footer class="mt-12">
                                <p>Thanks & Regards,</p>
                                <p>Alexandar</p>
                            </footer>
                        </article>
                        <ul class="flex mt-12 space-x-4">
                            <li
                                class="w-10 h-10 p-1 text-indigo-600 transition duration-200 border rounded-lg cursor-pointer hover:bg-blue-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                </svg>
                            </li>
                            <li
                                class="w-10 h-10 p-1 text-blue-800 transition duration-200 border rounded-lg cursor-pointer hover:bg-blue-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                </svg>
                            </li>
                            <li
                                class="w-10 h-10 p-1 text-pink-400 transition duration-200 border rounded-lg cursor-pointer hover:bg-blue-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                </svg>
                            </li>
                            <li
                                class="w-10 h-10 p-1 text-yellow-500 transition duration-200 border rounded-lg cursor-pointer hover:bg-blue-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </li>
                        </ul>
                    </section>
                    <section class="sticky w-full mt-6 mb-3 border rounded-xl bg-gray-50 dark:bg-gray-800">
                        <textarea class="w-full p-2 text-gray-800 rounded-xl dark:text-gray-50 dark:bg-gray-700"
                            placeholder="Type your reply here..." rows="3"></textarea>
                        <div class="flex items-center justify-between p-2">
                            <button class="w-6 h-6 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                            </button>
                            <button class="px-6 py-2 text-white bg-purple-600 rounded-xl">Reply</button>
                        </div>
                    </section>
                </section>
            </main>
        </div>
    </div>
@endsection
