@extends('layouts.app')
@section('content')
    <div class="flex">
        @include('layouts.asidenav')
        <section class="bg-white dark:bg-gray-900">

            <div class="flex flex-col flex-1 m-4 overflow-hidden text-gray-800 dark:text-gray-200">


                <!-- Main content -->
                <main class="flex-1 p-2 overflow-hidden ">
                    <!-- Main content header -->
                    <ol class="flex breadcrumb">
                        <li><a href="/" class=" hover:underline hover:text-yellow-400"><i
                                    class="fa fa-dashboard"></i>Dashboard</a></li>
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
                    @isset($post)
                        <div class="content-center text-center ">
                            <h1 class="text-2xl font-semibold whitespace-nowrap">
                                {{ $post->title }}
                            </h1>
                        </div>
                        <div class="max-w-full px-5 py-4 bg-gray-200 rounded-lg shadow dark:bg-gray-800">
                            <div class="flex items-center justify-between mb-2">
                                <div class="">
                                    <div>
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
                                        <userprofile-component :userid={{ $post->user_id }} online="{{ $Online }}" />
                                    </div>
                                    <span class="block text-sm font-light leading-snug text-gray-500 dark:text-gray-400">
                                        {{ date('jS M Y', strtotime($post->created_at)) }}
                                    </span>
                                </div>

                                @if (isset(Auth::User()->id) && Auth::User()->id == $post->user_id)
                                    <div
                                        class="flex flex-row items-center float-right object-right px-2 py-2 space-x-2 right-2">
                                        <div>
                                            <form action="{{ url('/home/' . $post->id) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <button class="inline-flex items-center mx-2 w-7 h-7" type="button"
                                                    data-modal-toggle="popup-modal" data-tooltip-target="tooltip-delete">
                                                    <img src="\images\app\delete.png" alt="">
                                                </button>
                                                <div id="tooltip-delete" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                                    Delete This Post
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>

                                                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                                    id="popup-modal" aria-hidden="true">
                                                    <div class="relative w-full h-full max-w-md px-4 md:h-auto">

                                                        <div class="relative bg-gray-300 rounded-lg shadow dark:bg-gray-600">

                                                            <div class="flex justify-end p-2">
                                                                <button type="button"
                                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                                    data-modal-toggle="popup-modal">
                                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
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
                                            <button data-tooltip-target="tooltip-edit">
                                                <a href="{{ url('/home/' . $post->id . '/edit') }}"
                                                    class="inline-flex items-center w-5 h-5">
                                                    <img src="\images\app\edit.png" alt="">
                                                </a>


                                            </button>
                                            <div id="tooltip-edit" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                                Edit This Post
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <img class="align-middle rounded-3xl mx-auto" src="{{ asset('images/' . $post->image_path) }}"
                                alt="{{ $post->image_path }}">

                            <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                                <p class="text-s leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">
                                    <b>Publisher:</b> <span class=" underline">{{ ' ' . $post->publisher }}</span>
                                </p>
                                {{-- 'publisher','pages','language','colour','yr_published' --}}
                                <p class="text-s leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">
                                    <b>Model:</b> <span class=" underline">{{ ' ' . $post->model }}</span>
                                </p>
                                <p class="text-s leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">
                                    <b>Pages:</b> <span class=" underline">{{ $post->pages }}</span>
                                </p>
                                <p class="text-s leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">
                                    <b>Year Published:</b> <span class=" underline">{{ ' ' . $post->yr_published }}</span>
                                </p>
                                <p class="text-s leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">
                                    <b>Color:</b> <span class=" underline">{{ ' ' . $post->colour }}</span>
                                </p>
                                <p class="text-s leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">
                                    <b> Language:</b> <span class=" underline">{{ ' ' . $post->language }}</span>
                                </p>
                                <div class="pt-5">
                                    <span class="flex itemms-center">
                                        <a class="text-s leading-3 underline text-blue-800 dark:text-white cursor-pointer">
                                            Add to favorites
                                        </a>
                                    </span>
                                    <span class="text-base font-black leading-none text-gray-800 dark:text-white mb-4 right-2">
                                        @if ($post->price == 0)
                                            <span class=" bg-fuchsia-600 rounded-3xl p-4 text-xl px-2">
                                                Free
                                            </span>
                                        @else
                                            @if ($post->price > 0)
                                                <span>
                                                    <span class="  text-xl">
                                                        Now Ksh
                                                        {{ ' ' . ($post->price - $post->discount) }}
                                                    </span>
                                                    <span class=" line-through p-4 text-gray-500">
                                                        Was: Ksh <span class="text-red-600  p-1">{{ $post->price }}</span>
                                                    </span>
                                                </span>
                                            @else
                                                <span class=" bg-fuchsia-600 rounded-3xl p-4 text-xl">
                                                    Ksh {{ ' ' . $post->price }}
                                                </span>
                                            @endif
                                        @endif

                                    </span>
                                </div>
                            </div>
                            <p class="leading-snug md:leading-normal">
                                {{ $post->description }}
                            </p>
                            <div class="justify-center md:flex md:justify-between">
                                <div>

                                    <reactions-component :summary='@json($post->reactionSummary())' @auth
                                        :reacted='@json($post->reacted())' @endauth />
                                </div>
                                <div
                                    class="flex content-end justify-end pt-4 pl-4 md:pl-2 md:right-0 md:justify-end justify-self-end">

                                    <dd class="flex items-center justify-between px-2">

                                        <svg width="24" height="24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
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

                                    {{-- <dd id="accordion-arrow-icon" data-accordion="open"
                                        class="flex items-center justify-between px-2 ">
                                        <h2 id="accordion-arrow-icon-heading-2">
                                            <button type="button" class="flex items-center justify-between px-2 "
                                                data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false"
                                                aria-controls="accordion-arrow-icon-body-2">
                                                <span> 33 comments</span>
                                                <svg data-accordion-icon
                                                    class="w-6 h-6 mx-2 shrink-0 text-slate-400 dark:text-slate-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                                                </svg>
                                            </button>
                                        </h2>
                                    </dd> --}}
                                    <dd class="flex items-center justify-between px-2 ">
                                        {{ $post->view_count }}
                                        <span>views</span>
                                    </dd>
                                </div>
                            </div>
                            {{-- <div id="accordion-arrow-icon-body-2" class="hidden"
                                aria-labelledby="accordion-arrow-icon-heading-2">
                            </div> --}}
                            <div class="p-5 mt-4 border border-b-0 border-gray-300 dark:border-gray-700">
                                <h5 class="my-3 text-xl font-bold text-center text-yellow-600 underline hover:text-blue-300">
                                    33 Comments For This Post
                                </h5>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    Scroll Your Screen Down To See More Comments
                                </p>

                                <postcomments-component :user_id={{ Auth::User()->id }} :postid={{ $post->id }} />
                            </div>

                        </div>
                    @else
                        <span class="text-gray-900 dark:text-white">
                            <a href="">
                                <span class="p-6 text-3xl italic font-bold text-yellow-400 dark:text-yellow-400">
                                    This post does not exist!
                                </span>
                            </a>,
                        </span>
                    @endisset
                </main>
            </div>

        </section>

    </div>
@endsection
