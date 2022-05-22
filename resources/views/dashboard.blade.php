@extends('layouts.app')
@section('content')
    <div class="flex">

        @include('layouts.asidenav')
        <section class="bg-white dark:bg-gray-900">
            {{-- <div class="fixed inset-0 z-10 bg-gray-900/50 dark:bg-gray-900/60 " id="sidebar1" aria-label="Sidebar1">
            </div> --}}
            <div class="flex flex-col flex-1 h-full overflow-hidden text-gray-800 dark:text-gray-200">
                <button style="hover:transform: rotate(45deg);"
                    class="fixed bg-transparent right-5 top-1/2 hover:bg-gray-500 hover:rounded-full hover:-rotate-90 hover:scale-125 focus:scale-125"
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
                                <svg class="w-5 h-5" fill="red" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create a post</h3>
                                <form action="{{ url('/home') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        for="default_size">Upload Thumbnail</label>
                                    <input class="pb-3" type="file" accept="image/*" onchange="loadFile(event)"
                                        name="image">
                                    <img id="output" class="w-2xl h-36 mx-auto" />

                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            for="title">Title Of your Post
                                        </label>
                                        <input type="text" id="title" name="title"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>

                                    <label class="block mt-2 mb-1 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        for="default_size">Description</label>
                                    <div class="description">
                                        <textarea id="description" placeholder="Description..." name="description"
                                            class="block w-full py-2 text-xl text-gray-500 border-b-2 outline-none h-60 bg-slate-400 dark:bg-slate-600 dark:text-gray-600 "></textarea>
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
                <main class="flex-1 max-h-full p-2 overflow-hidden overflow-y-scroll">
                    <!-- Main content header -->
                    <div class="content-center text-center ">
                        <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>

                    </div>

                    <!-- Start Content -->
                    <!-- component -->
                    @if ($errors->any())
                        <div class="w-4/5 m-auto ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="w-1/5 py-4 mb-4 bg-red-700 text-gray-50 rounded-2xl">
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
                    @isset($My_neighbor)
                        <div class=" mx-2 grid gap-4  md:grid-cols-2  xl:gap-8 2xl:gap-12">
                            @foreach ($My_neighbor as $post)
                                <div class=" px-4 p-2 bg-gray-200 rounded-lg shadow dark:bg-gray-800">
                                    <div
                                        class="grid grid-cols-2 gap-4 font-mono text-sm font-bold leading-6 text-center text-white justify-items-stretch auto-rows-fr ">
                                        <div class="flex w-96">
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
                                        </div>

                                        @if (isset(Auth::User()->id) && Auth::User()->id == $post->user_id)
                                            <button
                                                class="relative z-10 block pt-2 pr-2 text-gray-700  border border-transparent rounded-md dark:text-white  dark:focus:ring-opacity-40 hover:rotate-1 hover:text-blue-600 focus:outline-none w-3 justify-self-end 
                                            "
                                                id="user-menu-button2" aria-expanded="false"
                                                data-dropdown-toggle="dropdownusermenu">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                </svg>
                                            </button>
                                            <div class="z-50 hidden m-0 text-base list-none bg-gray-100   rounded shadow  dark:bg-gray-900 p-2 border "
                                                id="dropdownusermenu">
                                                <div class=" pb-3">
                                                    <form action="{{ url('/home/' . $post->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button class="inline-flex items-center mx-2 w-7 h-7" type="button"
                                                            data-modal-toggle="popup-modal"
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
                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                            </path>
                                                                        </svg>
                                                                        <h3
                                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                            Are you sure you want to delete this Post?</h3>
                                                                        <button data-modal-toggle="popup-modal" type="submit"
                                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                            Yes, I'm sure
                                                                        </button>
                                                                        <button data-modal-toggle="popup-modal" type="button"
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
                                                    <button data-tooltip-target="tooltip-edit" data-modal-toggle="pro-modal">
                                                        {{-- <a href="{{ url('/home/' . $post->id . '/edit') }}"
                                                            class="inline-flex items-center w-5 h-5">
                                                        </a> --}}
                                                        <img class="inline-flex items-center w-5 h-5" src="\images\app\edit.png"
                                                            alt="">
                                                    </button>
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
                                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                    <h3
                                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                        This action is performed in pro account or verified
                                                                        account. Do you want to apply for pro account?</h3>
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
                                        <h3 class="text-xl lg:text-3xl font-bold leading-tight mb-2">
                                            <a class="hover:text-gray-100 transition duration-150 ease-in-out"
                                                href="{{ url('/home/' . $post->id) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h3>
                                        <div class="right-0 float-right ">
                                            <example-component :summary='@json($post->reactionSummary())' @auth
                                                :reacted='@json($post->reacted())' @endauth />
                                        </div>
                                    </div>

                                    <img class="align-middle rounded-3xl mx-auto px-auto self-center"
                                        src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->image_path }}">
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
                                                <svg class="w-3 h-3 pt-1 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
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


                                    <div class="right-0 justify-center pt-2 flex">

                                        <dd class="flex ml-1 font-light text-gray-500 dark:text-gray-400">

                                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
                                                <path
                                                    d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z">
                                                </path>
                                                <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path>
                                            </svg>
                                            {{ $post->location }}
                                        </dd>
                                        <a class="px-2" href="#">
                                            33 comments &nbsp;
                                        </a>

                                        <div class="items-center text-gray-900 post-views small dark:text-gray-400">
                                            {{ $post->view_count }}
                                            <span>views</span>
                                        </div>


                                        <div class="flex px-2 ml-1 font-light text-gray-500 dark:text-gray-400">


                                            <svg class="w-4 h-4 mx-1 text-slate-400 dark:text-slate-500" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
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







                    <!-- Chart cards (Four columns grid) -->
                    <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-4">
                        <!-- Users chart card --><a href="#"
                            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                            <div class="flex items-start">
                                <div class="flex flex-col flex-shrink-0 space-y-2">
                                    <span class="text-gray-400">Total Users</span>
                                    <span class="text-lg font-semibold">100,221</span>
                                </div>
                                <div class="relative min-w-0 ml-auto h-14">
                                    <canvas id="usersChart"></canvas>
                                </div>
                            </div>
                            <div>
                                <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                                <span>from 2020</span>
                            </div>
                        </a>

                        <!-- Sessions chart card --><a href="#"
                            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                            <div class="flex items-start">
                                <div class="flex flex-col flex-shrink-0 space-y-2">
                                    <span class="text-gray-400">Sessions</span>
                                    <span class="text-lg font-semibold">40%</span>
                                </div>
                                <div class="relative min-w-0 ml-auto h-14">
                                    <canvas id="sessionsChart"></canvas>
                                </div>
                            </div>
                            <div>
                                <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">1.2%</span>
                                <span>from 2020</span>
                            </div>
                        </a>

                        <!-- Vists chart card --><a href="#"
                            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                            <div class="flex items-start">
                                <div class="flex flex-col flex-shrink-0 space-y-2">
                                    <span class="text-gray-400">Vists</span>
                                    <span class="text-lg font-semibold">300,527</span>
                                </div>
                                <div class="relative min-w-0 ml-auto h-14">
                                    <canvas id="vistsChart"></canvas>
                                </div>
                            </div>
                            <div>
                                <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">10%</span>
                                <span>from 2020</span>
                            </div>
                        </a>

                        <!-- Articles chart card --><a href="#"
                            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                            <div class="flex items-start">
                                <div class="flex flex-col flex-shrink-0 space-y-2">
                                    <span class="text-gray-400">Articles</span>
                                    <span class="text-lg font-semibold">600,429</span>
                                </div>
                                <div class="relative min-w-0 ml-auto h-14">
                                    <canvas id="articlesChart"></canvas>
                                </div>
                            </div>
                            <div>
                                <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">30%</span>
                                <span>from 2020</span>
                            </div>
                        </a>
                    </div>

                    <!-- Two columns grid -->
                    <div class="grid grid-cols-1 gap-6 mt-6 lg:grid-cols-2 xl:grid-cols-4">
                        <!-- Import data card -->
                        <div class="border rounded-lg shadow-sm">
                            <!-- Card header -->
                            <div class="flex items-center justify-between px-4 py-2 border-b">
                                <h5 class="font-semibold">Import Data</h5>
                                <!-- Dots button -->
                                <button class="p-2 rounded-full">
                                    <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <p class="px-4 py-6 text-gray-600">See and talk to your users and import them into your
                                platform.</p>
                            <ul class="px-4 pb-4 space-y-4 divide-y">
                                <h5 class="font-semibold">Import Users from:</h5>
                                <li class="flex items-start justify-between pt-4">
                                    <div class="flex items-start space-x-3">
                                        <!-- Twitter icon -->
                                        <span class="flex items-center pt-1">
                                            <svg fill="currentColor" class="w-5 h-5 text-blue-500">
                                                <path
                                                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">
                                                </path>
                                            </svg>
                                        </span>
                                        <div>
                                            <h5 class="font-semibold">Twitter</h5>
                                            <span class="text-sm font-medium text-gray-400">Users</span>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="flex items-center px-2 py-1 space-x-2 text-sm text-white bg-blue-600 rounded-md">
                                        <span>Launch</span>
                                        <span class="">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="flex items-start justify-between pt-4">
                                    <div class="flex items-start space-x-3">
                                        <!-- Github icon -->
                                        <span class="flex items-center pt-1">
                                            <svg width="24" height="24" fill="currentColor" class="text-black">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z">
                                                </path>
                                            </svg>
                                        </span>
                                        <div>
                                            <h5 class="font-semibold">Github</h5>
                                            <span class="text-sm font-medium text-gray-400">Users</span>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="flex items-center px-2 py-1 space-x-2 text-sm text-white bg-blue-600 rounded-md">
                                        <span>Launch</span>
                                        <span class="">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="pt-4 text-sm font-medium text-gray-400">
                                    <p>
                                        Or you can
                                        <a href="#"
                                            class="font-normal text-blue-500 hover:underline whitespace-nowrap">sync
                                            data
                                            to your dashboard</a>
                                        to ensure data is always up to date.
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <!-- Monthly chart card -->
                        <div class="border rounded-lg shadow-sm xl:col-span-3">
                            <!-- Card header -->
                            <div class="flex items-center justify-between px-4 py-2 border-b">
                                <h5 class="font-semibold">Monthly Expenses</h5>
                                <!-- Dots button -->
                                <button class="p-2 rounded-full">
                                    <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Card content -->
                            <div class="flex items-center p-4 space-x-4">
                                <span class="text-3xl font-medium">45%</span>
                                <span class="flex items-center px-2 space-x-2 text-sm text-green-800 bg-green-100 rounded">
                                    <span>
                                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd"
                                                d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span>39.2%</span>
                                </span>
                            </div>
                            <!-- Chart -->
                            <div class="relative min-w-0 p-4 h-80">
                                <canvas id="updatingMonthlyChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
                    <h3 class="mt-6 text-xl">Users</h3>
                    <div class="flex flex-col mt-6">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Title
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Role
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <div>
                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>
                                                </template>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>


    </div>


    <script type="application/javascript">
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        $("#output").change(function() {
            imagePreview(this);
            $(".imagechange").remove();
        });
    </script>
@endsection
