@extends('layouts.app')
@section('content')
    <div class="flex">

        @include('layouts.asidenav')
        <section class="bg-white dark:bg-gray-900">
            {{-- <div class="fixed inset-0 z-10 bg-gray-900/50 dark:bg-gray-900/60 " id="sidebar1" aria-label="Sidebar1">
            </div> --}}
            <div class="flex flex-col flex-1 h-full overflow-hidden text-gray-800 dark:text-gray-200">
                <!-- Main content -->
                <main class="flex-1 max-h-full p-2 mb-4">
                    <!-- Main content header -->
                    <ol class="flex breadcrumb">
                        <li>
                            <svg class="w-4 h-4 mx-1 animate-ping fill-sky-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </li>
                        <li>
                            <a href="/" class=" hover:underline hover:text-yellow-400">
                                Dashboard</a>
                        </li>
                        <?php $segments = '';
                        $toEnd = count(Request::segments());
                        ?>
                        @foreach (Request::segments() as $segment)
                            <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
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
                                <a class=" hover:underline hover:text-yellow-400"
                                    href="{{ $segments }}">{{ $segment }}</a>
                            </li>
                            <?php }                            
                            ?>
                        @endforeach
                    </ol>

                    <!-- Start Content -->
                    <!-- component -->
                    @if ($errors->any())
                        <div class="w-4/5 m-auto ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="w-4/5 py-4 mb-4 bg-red-700 text-gray-50 rounded-2xl">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div id="toast-success"
                            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                            role="alert">
                            <div
                                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3 text-sm font-normal"> {{ session()->get('message') }}</div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                data-collapse-toggle="toast-success" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    @endif


                    <div
                        class="relative mx-auto mt-4 -my-px bg-white rounded-sm shadow-lg md:h-screen md:overflow-auto dark:bg-slate-800 ring-1 ring-slate-900/5">
                        <div class="relative md:flex md:flex-row">
                            <div class="w-full md:h-screen md:overflow-auto md:scroll-m-0 ">

                                <div class="content-center text-center">
                                    <h1 class="sticky my-2 mb-3 text-xl font-semibold underline whitespace-nowrap">
                                        Who Is Your Neighbor?
                                    </h1>

                                </div>
                                @isset($Books)
                                    <div class="grid gap-4 mx-2 ">
                                        @foreach ($Books as $post)
                                            @if ($post->id == Auth::User()->id)
                                            @else
                                                <div class="p-2 px-4 bg-gray-200 rounded-lg shadow dark:bg-slate-900">
                                                    <div
                                                        class="grid grid-cols-2 gap-4 font-mono text-sm font-bold leading-6 text-center text-white justify-items-stretch auto-rows-fr ">
                                                        <div class="">
                                                            <div class="text-xl ">
                                                                <userprofile-component :userid={{ $post->id }}
                                                                    online="{{ $Online }}" />
                                                            </div>
                                                            <span
                                                                class="flex text-sm font-light leading-snug text-gray-500 dark:text-yellow-400">
                                                                <span class="text-gray-700 dark:text-gray-400">
                                                                    Joined
                                                                </span>
                                                                <svg class="w-3 h-3 mx-1 mt-1" fill="currentColor"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                {{ date('jS M Y', strtotime($post->created_at)) }}
                                                            </span>
                                                            <span
                                                                class="flex my-4 text-sm font-light leading-snug text-gray-500 dark:text-blue-400">
                                                                <span class="text-gray-700 dark:text-gray-400">
                                                                    Located
                                                                </span>
                                                                <svg class="w-3 h-3 mx-1 mt-1" fill="currentColor"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                {{ $post->location }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="mb-4 font-bold text-blue-700 underline capitalize">
                                                        About
                                                    </span>
                                                    <p class="mt-4 leading-snug md:leading-normal">
                                                        {{ $post->bio }}

                                                    </p>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <span
                                        class="max-w-full px-5 py-4 text-gray-900 bg-gray-200 rounded-lg shadow dark:text-white dark:bg-gray-800">
                                        <a href="">
                                            <span class="p-6 text-3xl italic font-bold text-yellow-400 dark:text-yellow-400">
                                                No Post neighbors at the moment check back Later
                                            </span>
                                        </a>,
                                    </span>
                                @endisset

                            </div>
                            <div
                                class="top-0 items-center px-1 py-3 m-2 text-sm font-semibold bg-gray-200 rounded-sm md:sticky text-slate-900 dark:text-slate-200 dark:bg-slate-900 backdrop-blur-sm ring-1 ring-slate-900/10 dark:ring-black/10 md:overflow-hidden">
                                <div class="flex">

                                    <h2 class="px-4 py-2 text-xl font-semibold text-red-600 hover:underline">
                                        Critical
                                    </h2>
                                    <img class="w-8 h-8 m-2 rounded-full animate-pulse" src="\images\app\critical.png"
                                        alt="critical.png">
                                    <div class="flex-1 p-4">
                                        <a href="#">
                                            <h2 class="w-48 px-2 ml-2 font-bold text-blue-400">View All</h2>
                                        </a>
                                    </div>

                                </div>
                                <hr class="border-gray-600">

                                <!--first post-->
                                <div class=" md:overflow-auto">
                                    <criticalpost-component />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 m-2 rounded-sm bg-slate-600 ">
                        <?php echo $Books->render(); ?>
                    </div>
                    {{-- ______________
                    <infinite-component /> --}}




                </main>
            </div>
        </section>
    </div>
@endsection
