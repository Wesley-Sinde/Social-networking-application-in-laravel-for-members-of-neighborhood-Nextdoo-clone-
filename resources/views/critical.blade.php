@extends('layouts.app')
@section('content')
    <div class="flex">

        @include('layouts.asidenav')
        <section class="bg-white dark:bg-gray-900">
            {{-- <div class="fixed inset-0 z-10 bg-gray-900/50 dark:bg-gray-900/60 " id="sidebar1" aria-label="Sidebar1">
            </div> --}}
            <div class="flex flex-col flex-1 h-full overflow-hidden text-gray-800 dark:text-gray-200">
                <button style="hover:transform: rotate(45deg);"
                    class="fixed z-40 bg-transparent right-5 top-1/2 hover:bg-gray-500 hover:rounded-full hover:-rotate-90 hover:scale-125 focus:scale-125"
                    type="button" data-modal-toggle="createpost-modal">
                    <img class="" src="\images\app\create.png" alt="create.png">
                </button>
                <div id="createpost-modal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-md p-4 ">

                        <div class="relative bg-gray-400 rounded-lg shadow dark:bg-gray-700 ">
                            <button type="button"
                                class="absolute top-3 right-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="createpost-modal">
                                <svg class="w-5 h-5" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                    What do you want your neighbor to Know?
                                </h3>
                                <form action="{{ url('/home') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        for="default_size">Upload Thumbnail</label>
                                    <input class="pb-3" type="file" accept="image/*" onchange="loadFile(event)"
                                        name="image">
                                    <img id="output" class="" />

                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            for="title">Title Of your Post
                                        </label>
                                        <input type="text" id="title" name="title"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>

                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            for="title">Level Of your Post
                                        </label>
                                        <select id="large" name="level"
                                            class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value='1' class="bg-green-400 " selected>Low</option>
                                            <option value='2' class="bg-blue-400 " value="US">Guarded</option>
                                            <option value='3' class="bg-yellow-300 " value="CA">Elevated</option>
                                            <option value='4' class="bg-orange-400 " value="FR">High</option>
                                            <option value='5' class="bg-red-400 " value="DE">Severe</option>
                                        </select>
                                    </div>
                                    <label class="block mt-2 mb-1 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        for="default_size">Description</label>
                                    <div class="description">
                                        <textarea id="description" placeholder="Description..." name="description"
                                            class="block w-full py-2 text-xl text-gray-600 border-b-2 outline-none h-60 bg-slate-400 dark:bg-slate-600 dark:text-gray-200 ">
                                        </textarea>
                                    </div>

                                    <div class="flex items-start mt-2 mb-6">
                                        <div class="flex items-center h-5">
                                            <input id="remember" type="checkbox" value=""
                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 required">
                                        </div>
                                        <label for="remember"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                            I agree with
                                            the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">
                                                terms
                                                and conditions
                                            </a>.
                                        </label>
                                    </div>
                                    <div class="items-center ">
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                                            Submit
                                        </button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <h1
                                        class="sticky my-2 mb-3 text-xl font-semibold text-red-600 underline whitespace-nowrap">
                                        Your neighbor Critical Posts?
                                    </h1>

                                </div>
                                @isset($My_neighbor)
                                    <div class="grid gap-4 mx-2 ">
                                        @foreach ($My_neighbor as $post)
                                            <div class="p-2 px-4 bg-gray-200 rounded-lg shadow dark:bg-slate-900">
                                                <div
                                                    class="grid grid-cols-2 gap-4 font-mono text-sm font-bold leading-6 text-center text-white justify-items-stretch auto-rows-fr ">
                                                    <div class="">
                                                        <div class="text-xl ">
                                                            <userprofile-component :userid={{ $post->user_id }}
                                                                online="{{ $Online }}" />
                                                        </div>
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
                                                    {{-- <div class="flex w-96">
                                                        <img class="w-12 h-12 rounded-full"
                                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
                                                        <div class="ml-2 mt-0.5">
                                                            <span class="text-gray-900 dark:text-white">
                                                                <a href=""><span
                                                                        class="italic font-bold text-yellow-400 dark:text-yellow-400 ">
                                                                        {{ $post->User->name }}
                                                                    </span>
                                                                </a>,
                                                            </span>
                                                            <span
                                                                class="block text-sm font-light leading-snug text-gray-500 dark:text-gray-400">
                                                                {{ date('jS M Y', strtotime($post->created_at)) }}</span>
                                                        </div>
                                                    </div> --}}

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
                                                                <form action="{{ url('/home/' . $post->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')

                                                                    <button class="inline-flex items-center mx-2 w-7 h-7"
                                                                        type="button" data-modal-toggle="popup-modal"
                                                                        data-tooltip-target="tooltip-delete">
                                                                        <img src="\images\app\delete.png" alt="">
                                                                    </button>
                                                                    <div id="tooltip-delete" role="tooltip"
                                                                        class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-red-600 rounded-lg shadow-sm opacity-0 tooltip">
                                                                        Delete This Post
                                                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                                                    </div>

                                                                    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                                                        id="popup-modal" aria-hidden="true">
                                                                        <div
                                                                            class="relative w-full h-full max-w-md px-4 md:h-auto">

                                                                            <div
                                                                                class="relative bg-gray-300 rounded-lg shadow dark:bg-gray-600">

                                                                                <div class="flex justify-end p-2">
                                                                                    <button type="button"
                                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                                                        data-modal-toggle="popup-modal">
                                                                                        <svg class="w-5 h-5"
                                                                                            fill="currentColor"
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
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="2"
                                                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <h3
                                                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                                        Are you sure you want to delete this
                                                                                        Post?
                                                                                    </h3>
                                                                                    <button data-modal-toggle="popup-modal"
                                                                                        type="submit"
                                                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                                        Yes, I'm sure
                                                                                    </button>
                                                                                    <button data-modal-toggle="popup-modal"
                                                                                        type="button"
                                                                                        class="text-gray-500hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10  dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 bg-blue-400 dark:bg-blue-600">No,
                                                                                        cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
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
                                                                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                                                    id="pro-modal" aria-hidden="true">
                                                                    <div
                                                                        class="relative w-full h-full max-w-md px-4 md:h-auto">

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
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                                    </path>
                                                                                </svg>
                                                                                <h3
                                                                                    class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                                    This action is performed in pro account or
                                                                                    verified
                                                                                    account. Do you want to apply for pro
                                                                                    account?
                                                                                </h3>
                                                                                <button data-modal-toggle="pro-modal"
                                                                                    class="text-gray-500hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10  dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-green-600 bg-blue-400 dark:bg-blue-600">
                                                                                    Yes, I'm sure
                                                                                </button>
                                                                                <button data-modal-toggle="pro-modal"
                                                                                    type="button"
                                                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">No,
                                                                                    cancel
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="tooltip-edit" role="tooltip"
                                                                    class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-blue-600 rounded-lg shadow-sm opacity-0 tooltip">
                                                                    Edit This Post
                                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="flex">
                                                    {{-- <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            {{ $post->title }}
                                        </h3> --}}
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

                                                <img class="self-center mx-auto align-middle rounded-3xl px-auto"
                                                    src="{{ asset('images/' . $post->image_path) }}"
                                                    alt="{{ $post->image_path }}">
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
                                                {{-- <div>
                                        <div class="right-0 justify-end pt-2 d-flex">
                                            <div class="ml-1 font-light text-gray-500 dark:text-gray-400">
                                                33 comments &nbsp;
                                            </div>

                                            <div class="text-gray-900 post-views small dark:text-gray-400">
                                                {{ $post->view_count }}
                                                <span>views</span>
                                            </div>
                                        </div>
                                    </div> --}}


                                                <div class="right-0 flex justify-center pt-2">

                                                    <dd class="flex ml-1 font-light text-gray-500 dark:text-gray-400">

                                                        <svg width="24" height="24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="mr-1 text-slate-400 dark:text-slate-500"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z">
                                                            </path>
                                                            <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path>
                                                        </svg>
                                                        {{ $post->location }}
                                                    </dd>
                                                    {{-- <a class="px-2" href="#">
                                            33 comments &nbsp;
                                        </a> --}}

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
                        {{-- <div class="relative">
                            <div
                                class="sticky top-0 flex items-center px-4 py-3 text-sm font-semibold text-slate-900 dark:text-slate-200 bg-slate-50/90 dark:bg-slate-700/90 backdrop-blur-sm ring-1 ring-slate-900/10 dark:ring-black/10">
                                A
                            </div>
                            <div class="divide-y dark:divide-slate-200/5">
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Andrew
                                        Alfred</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Aisha
                                        Houston</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Anna
                                        White</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Andy
                                        Flint</strong>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div
                                class="sticky top-0 flex items-center px-4 py-3 text-sm font-semibold text-slate-900 dark:text-slate-200 bg-slate-50/90 dark:bg-slate-700/90 backdrop-blur-sm ring-1 ring-slate-900/10 dark:ring-black/10">
                                B</div>
                            <div class="divide-y dark:divide-slate-200/5">
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Bob
                                        Alfred</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Bianca
                                        Houston</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Brianna
                                        White</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Bert
                                        Flint</strong>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div
                                class="sticky top-0 flex items-center px-4 py-3 text-sm font-semibold text-slate-900 dark:text-slate-200 bg-slate-50/90 dark:bg-slate-700/90 backdrop-blur-sm ring-1 ring-slate-900/10 dark:ring-black/10">
                                C
                            </div>
                            <div class="divide-y dark:divide-slate-200/5">
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Colton
                                        Alfred</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Cynthia
                                        Houston</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Cheyenne
                                        White</strong>
                                </div>
                                <div class="flex items-center gap-4 p-4">
                                    <img class="w-12 h-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong class="text-sm font-medium text-slate-900 dark:text-slate-200">Charlie
                                        Flint</strong>
                                </div>
                            </div>
                        </div> --}}
                    </div>




                    <div class="p-2 m-2 rounded-sm bg-slate-600 ">
                        <?php echo $My_neighbor->render(); ?>
                    </div>
                    {{-- ______________
                    <infinite-component /> --}}




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
