@extends('layouts.app')
@section('content')
    <div class="flex">

        @include('layouts.asidenav')
        <section class="bg-white dark:bg-gray-900">
            {{-- <div class="fixed inset-0 z-10 bg-gray-900/50 dark:bg-gray-900/60 " id="sidebar1" aria-label="Sidebar1">
            </div> --}}
            <div class="flex flex-col flex-1 h-full overflow-hidden text-gray-800 dark:text-gray-200">
                {{-- <button style="hover:transform: rotate(45deg);"
                    class="fixed z-40 bg-transparent right-5 top-1/2 hover:bg-gray-500 hover:rounded-full hover:-rotate-90 hover:scale-125 focus:scale-125"
                    type="button" data-modal-toggle="createpost-modal">
                    <img class="" src="\images\app\create.png" alt="create.png">
                </button> --}}

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

                    {{-- {!! html_entity_decode($socialShare) !!}
                    --
                    <div>
                        
                    {{ $socialShare }}  
                    {!! $socialShare !!}
                    </div>
                    -- -- {-- {{ $socialShare }} --}}

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
                                        Our Newly Posted Documents?
                                    </h1>

                                </div>
                                @isset($Books)
                                    <div class="grid gap-4 mx-2 ">
                                        @foreach ($Books as $post)
                                            <div class="p-2 px-4 bg-gray-200 rounded-lg shadow dark:bg-slate-900">
                                                <div
                                                    class="flex font-mono text-sm font-bold leading-6 text-center text-white justify-items-stretch auto-rows-fr ">
                                                    <div class="w-full">
                                                        @if (Cache::has('user-is-online-' . $post->user_id))
                                                            {{-- <span class="text-success">Online</span> --}}
                                                            @php
                                                                $Online = 'Online';
                                                            @endphp
                                                        @else
                                                            {{-- <span class="text-secondary">Offline</span> --}}
                                                            @php
                                                                $Online = \Carbon\Carbon::parse($post->last_seen)->diffForHumans();
                                                            @endphp
                                                        @endif
                                                        <div class="w-full text-xl">
                                                            <userprofile-component :userid={{ $post->user_id }}
                                                                online="{{ $Online }}" />

                                                        </div>
                                                        {{-- @if ($Online !== 'Online' && $Online !== null)
                                                            <span class="text-green-500"> {{ $Online }}</span>
                                                        @endif --}}


                                                        <span
                                                            class="flex text-sm font-light leading-snug text-gray-500 dark:text-yellow-400">
                                                            <svg class="w-3 h-3 mt-1 mr-1" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            {{ date('jS M Y', strtotime($post->created_at)) }}
                                                        </span>
                                                    </div>

                                                    @if (isset(Auth::User()->id) && Auth::User()->id == $post->user_id)
                                                        <button
                                                            class="relative z-10 block w-3 pt-2 pr-2 text-gray-700 border border-transparent rounded-md dark:text-white dark:focus:ring-opacity-40 hover:rotate-1 hover:text-blue-600 focus:outline-none justify-self-end "
                                                            id="user-menu-button2" aria-expanded="false"
                                                            data-dropdown-toggle="dropdownusermenu">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path
                                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                            </svg>
                                                        </button>
                                                        <div class="z-50 hidden p-2 m-0 text-base list-none bg-gray-100 border rounded shadow dark:bg-gray-900 "
                                                            id="dropdownusermenu">
                                                            <div class="pb-3 ">
                                                                <button class="inline-flex items-center mx-2 w-7 h-7"
                                                                    type="button" data-modal-toggle="popup-modal-delete"
                                                                    data-tooltip-target="tooltip-delete">
                                                                    <img src="\images\app\delete.png" alt="">
                                                                </button>
                                                                <div id="tooltip-delete" role="tooltip"
                                                                    class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-red-600 rounded-lg shadow-sm opacity-0 tooltip">
                                                                    Delete This Post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </div>


                                                            <div>
                                                                <button data-tooltip-target="tooltip-edit"
                                                                    data-modal-toggle="pro-modal">
                                                                    {{-- <a href="{{ url('/home/' . $post->id . '/edit') }}"
                                                            class="inline-flex items-center w-5 h-5">
                                                        </a> --}}
                                                                    <img class="inline-flex items-center w-5 h-5"
                                                                        src="\images\app\edit.png" alt="">
                                                                </button>

                                                                <div id="tooltip-edit" role="tooltip"
                                                                    class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-blue-600 rounded-lg shadow-sm opacity-0 tooltip">
                                                                    Edit This Post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form action="{{ url('/home/' . $post->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                                                id="popup-modal-delete" aria-hidden="true">
                                                                <div class="relative w-full h-full max-w-md px-4 md:h-auto">

                                                                    <div
                                                                        class="relative bg-gray-300 rounded-lg shadow dark:bg-gray-600">
                                                                        <div class="flex justify-end p-2">
                                                                            <button type="button"
                                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                                                data-modal-toggle="popup-modal-delete">
                                                                                <svg class="w-5 h-5" fill="currentColor"
                                                                                    viewBox="0 0 20 20"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                                        clip-rule="evenodd"></path>
                                                                                </svg>
                                                                            </button>
                                                                        </div>

                                                                        <div class="p-6 pt-0 text-center">
                                                                            <svg class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                                                fill="none" stroke="currentColor"
                                                                                viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="2"
                                                                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                                </path>
                                                                            </svg>
                                                                            <h3
                                                                                class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                                Are you sure you want to delete this
                                                                                Post?
                                                                            </h3>
                                                                            <button data-modal-toggle="popup-modal-delete"
                                                                                type="submit"
                                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                                Yes, I'm sure
                                                                            </button>
                                                                            <button data-modal-toggle="popup-modal-delete"
                                                                                type="button"
                                                                                class="text-gray-500hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10  dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 bg-blue-400 dark:bg-blue-600">
                                                                                No,
                                                                                cancel
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                                            id="pro-modal" aria-hidden="true">
                                                            <div class="relative w-full h-full max-w-md px-4 md:h-auto">

                                                                <div
                                                                    class="relative bg-gray-300 rounded-lg shadow dark:bg-gray-600">

                                                                    <div class="flex justify-end p-2">
                                                                        <button type="button"
                                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                                            data-modal-toggle="popup-modal">
                                                                            <svg class="w-5 h-5" fill="currentColor"
                                                                                viewBox="0 0 20 20"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </button>
                                                                    </div>

                                                                    <div class="p-6 pt-0 text-center">
                                                                        <svg class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                                            fill="none" stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                            </path>
                                                                        </svg>
                                                                        <h3
                                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                            This action is performed in pro account
                                                                            or
                                                                            verified
                                                                            account. Do you want to apply for pro
                                                                            account?
                                                                        </h3>
                                                                        <button data-modal-toggle="pro-modal"
                                                                            class="text-gray-500hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10  dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-green-600 bg-blue-400 dark:bg-blue-600">
                                                                            Yes, I'm sure
                                                                        </button>
                                                                        <button data-modal-toggle="pro-modal" type="button"
                                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">No,
                                                                            cancel
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="flex">
                                                    <h3 class="mb-2 text-xl font-bold leading-tight lg:text-3xl">
                                                        <a class="transition duration-150 ease-in-out hover:text-gray-100"
                                                            href="{{ url('/home/' . $post->id) }}">
                                                            {{ $post->title }}
                                                        </a>
                                                    </h3>
                                                    <div class="right-0 float-right ">
                                                        <example-component :summary='@json($post->reactionSummary())' @auth
                                                            :reacted='@json($post->reacted())' @endauth />
                                                    </div>
                                                </div>
                                                {{-- Main Body md:flex --}}

                                                <div
                                                    class=" py-8 md:py-10 lg:py-8 border-t border-gray-50  grid mx-2 mt-2 md:grid-cols-2">
                                                    <div class=" mr-2">
                                                        <img src="{{ asset('images/' . $post->image_path) }}"
                                                            alt="{{ $post->image_path }}" class="mx-auto" />
                                                        {{-- <img src="{{ asset('images/' . $post->image_path) }}"
                                                            alt="{{ $post->image_path }}"
                                                            class="md:hidden  object-center object-cover" /> --}}

                                                    </div>
                                                    <div class="px-5 py-5 ">
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            <b>Publisher:</b>
                                                            <span class=" underline">{{ ' ' . $post->publisher }}
                                                            </span>
                                                        </h5>
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            <b>Model:</b> <span
                                                                class=" underline">{{ ' ' . $post->model }}</span>
                                                        </h5>
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            {{ $post->pages }} Pages

                                                        </h5>
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            Color:{{ ' ' . $post->colour }}

                                                        </h5>
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            Color:{{ ' ' . $post->colour }}

                                                        </h5>
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">

                                                        </h5>
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            Language: {{ ' ' . $post->language }}
                                                        </h5>
                                                        <div class="flex items-center mt-2.5 mb-5">
                                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <title>First star</title>
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <title>Second star</title>
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <title>Third star</title>
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <title>Fourth star</title>
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <title>Fifth star</title>
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                            <span
                                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                                                        </div>
                                                        <div class="flex justify-between items-center">
                                                            @if ($post->price == 0)
                                                                <span class="text-3xl font-bold text-gray-900 dark:text-white">
                                                                    Free
                                                                </span>
                                                            @else
                                                                @if ($post->discount > 0)
                                                                    <span>
                                                                        <span class="font-bold text-gray-900 dark:text-white">
                                                                            Now Ksh
                                                                            <span
                                                                                class="text-xl"></span>{{ ' ' . ($post->price - $post->discount) }}
                                                                        </span>
                                                                        <span
                                                                            class=" pl-3  font-bold text-gray-500">
                                                                           <span class="line-through ">Was: Ksh </span> 
                                                                            <span class="p-1 text-xl">{{ $post->price }}</span>
                                                                        </span>
                                                                    </span>
                                                                @else
                                                                 <span class="font-bold text-gray-900 dark:text-white">
                                                                            Now Ksh
                                                                            <span
                                                                                class="text-xl"></span>{{ ' ' . ($post->price) }}
                                                                        </span>
                                                                @endif
                                                            @endif
                                                            {{-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> --}}
                                                            <div>
                                                             @if ($post->price == 0)
                                                                <a class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="images/{{ $post->image_path }}"
                                                                    download="{{ $post->image_path }}">
                                                                    Download
                                                                </a>
                                                            @else
                                                                <a href="#"
                                                                    class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                    Add to cart
                                                                </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>





                                                    {{-- <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                                                        <p class="text-s leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">
                                                            <span class=" underline decoration-wavy"></span> Publisher:
                                                            {{ ' ' . $post->publisher }}
                                                        </p>
                                                        <p class="text-s leading-3 text-gray-600 dark:text-white pt-2">
                                                            Model: {{ ' ' . $post->model }}
                                                        </p>
                                                        <p class="text-s leading-3 text-gray-600 dark:text-white pt-2">
                                                            {{ $post->pages }} Pages
                                                        </p>
                                                        <p class="text-s leading-3 text-gray-600 dark:text-white pt-2">
                                                            Year Published: {{ ' ' . $post->yr_published }}
                                                        </p>
                                                        <p class="text-s leading-3 text-gray-600 dark:text-white py-4">
                                                            Color:{{ ' ' . $post->colour }}
                                                        </p>
                                                        <p class="w-96 text-s leading-3 text-gray-600 dark:text-white">
                                                            Language: {{ ' ' . $post->language }}
                                                        </p>
                                                        <div class="flex items-center justify-between pt-5">
                                                            <div class="flex itemms-center">
                                                                <p
                                                                    class="text-s leading-3 underline text-gray-800 dark:text-white cursor-pointer">
                                                                    Add to favorites
                                                                </p>
                                                            </div>
                                                            <p
                                                                class="text-base font-black leading-none text-gray-800 dark:text-white">
                                                                @if ($post->price == 0)
                                                                    <div class=" bg-fuchsia-600 rounded-3xl p-4 text-xl px-2">
                                                                        Free
                                                                    </div>
                                                                @else
                                                                    @if ($post->price > 0)
                                                                        <div>
                                                                            <div class=" bg-fuchsia-600 rounded-3xl p-4">
                                                                                Was: Ksh <span
                                                                                    class="text-red-600 line-through p-1">{{ $post->price }}</span>
                                                                            </div>
                                                                            <br>
                                                                            <div
                                                                                class=" bg-orange-400 rounded-3xl p-4 text-xl">
                                                                                Now Ksh
                                                                                {{ ' ' . ($post->price - $post->discount) }}
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div class=" bg-fuchsia-600 rounded-3xl p-4 text-xl">
                                                                            Ksh {{ ' ' . $post->price }}
                                                                        </div>
                                                                    @endif
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div> --}}
                                                </div>



                                                <p class="leading-snug md:leading-normal ">
                                                    <?php
                                                    $yourText = $post->description;
                                                    if (strlen($yourText) > 200) {
                                                        $yourText = substr($post->description, 0, 200);
                                                        $yourText = $yourText . '.....';
                                                    }
                                                    ?>
                                                    {{ $yourText }}
                                                    <span class="whitespace-nowrap contents">
                                                        <a href="{{ url('/home/' . $post->id) }}"
                                                            class="flex items-center text-blue-500 align-middle hover:font-semibold hover:text-yellow-500 dark:text-blue-600 ">
                                                            Read more
                                                            <svg class="w-3 h-3 pt-1 ml-2" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </a>

                                                    </span>
                                                </p>
                                                <div class="right-0 flex justify-center pt-2">
                                                    <dd id="accordion-arrow-icon" data-accordion="open"
                                                        class="flex items-center justify-between px-2 ">
                                                        <h2 id="accordion-arrow-icon-heading-2">
                                                            <button type="button"
                                                                class="flex items-center justify-between px-2 "
                                                                data-accordion-target="#accordion-arrow-icon-body-2"
                                                                aria-expanded="false"
                                                                aria-controls="accordion-arrow-icon-body-2">
                                                                <span> 33 comments</span>
                                                            </button>
                                                        </h2>
                                                    </dd>
                                                    <dd class="items-center text-gray-900 dark:text-gray-400">
                                                        <span>views</span>
                                                        <span
                                                            class="px-2 text-white rounded-full box-decoration-clone bg-gradient-to-r from-indigo-600 to-pink-500">
                                                            {{ $post->view_count }}
                                                        </span>
                                                    </dd>


                                                    <dd class="flex px-2 ml-1 font-light ">


                                                        <svg class="w-4 h-4 mx-1 text-slate-400 dark:text-slate-500"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                                                            </path>
                                                        </svg>
                                                    </dd>
                                                </div>
                                                <postcomments-component :user_id={{ Auth::User()->id }}
                                                    :postid={{ $post->id }} />

                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <span
                                        class="max-w-full px-5 py-4 text-gray-900 bg-gray-200 rounded-lg shadow dark:text-white dark:bg-gray-800">
                                        <a href="">
                                            <span class="p-6 text-3xl italic font-bold text-yellow-400 dark:text-yellow-400">
                                                No Post Available at the moment check back Later
                                            </span>
                                        </a>,
                                    </span>
                                @endisset

                            </div>
                            <div
                                class="top-0 items-center px-1 py-3 m-2 text-sm font-semibold bg-gray-200 rounded-sm md:sticky text-slate-900 dark:text-slate-200 dark:bg-slate-900 backdrop-blur-sm ring-1 ring-slate-900/10 dark:ring-black/10 md:overflow-hidden">
                                <div class="flex">

                                    <h2 class="px-4 py-2 text-xl font-semibold text-red-600 hover:underline">
                                        Most Viewed
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
                                    <mostViewed-component />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 m-2 rounded-sm bg-slate-600 ">
                        <?php echo $Books->render(); ?>
                    </div>
                </main>
            </div>
        </section>


    </div>


    <script type="application/javascript">
        var loadFile = function(event) {
            var element = document.getElementById("output");
            element.classList.add("mx-auto");
            element.classList.add("w-auto");
            element.classList.add("h-36");
            element.classList.add("border");
            element.classList.add("m-3");
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
            // output.classList.add("mx-auto w-2xl h-36 border");
        };
        $("#output").change(function() {
            imagePreview(this);
            $(".imagechange").remove();
        });
    </script>
@endsection











<!-- checkout -->

{{-- <div class="w-full h-full bg-black dark:bg-gray-900 bg-opacity-90 top-0 overflow-y-auto overflow-x-hidden fixed sticky-0"
    id="chec-div">
    <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700"
        id="checkout">
        <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">
            <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-hidden overflow-x-hidden lg:h-screen h-auto"
                id="scroll">
              
                <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">Bag</p>
               
            </div>
            <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">
                <div
                    class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">
                    <div>
                        <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">Summary</p>
                        <div class="flex items-center justify-between pt-16">
                            <p class="text-base leading-none text-gray-800 dark:text-white">Subtotal</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white">,000</p>
                        </div>
                        <div class="flex items-center justify-between pt-5">
                            <p class="text-base leading-none text-gray-800 dark:text-white">Shipping</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white"></p>
                        </div>
                        <div class="flex items-center justify-between pt-5">
                            <p class="text-base leading-none text-gray-800 dark:text-white">Tax</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white"></p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                            <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                            <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">,240
                            </p>
                        </div>
                        <button onclick="checkoutHandler1(true)"
                            class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
