@extends('layouts.app')

@section('content')
    <div class="w-full px-2 mx-auto max-w-8xl">
        <div class="flex">

            @if (isset(Auth::User()->id))
                @include('layouts.asidenav')
            @endif
            <div>
                <div class="w-full m-auto ">
                    <div class="container flex items-center justify-between px-6 mx-auto border-b">
                        <div class="py-3 text-center text-gray-900 border-gray-200 dark:text-white ">
                            <h1 class="text-3xl ">
                                Sharing is Caring
                            </h1>
                        </div>

                        <div class="relative hidden mr-3 md:mr-0 md:block">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text"
                                class="block w-full p-2 pl-10 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 typeahead"
                                placeholder="Search...">
                        </div>


                        @if (Auth::check())
                            <a href="{{ url('/blog/create') }}">

                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Create Post &nbsp;
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                            </a>
                        @endif
                    </div>
                </div>

                @if (session()->has('message'))
                    <div id="toast-success"
                        class="sticky flex items-center float-right max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
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
                        <div class="ml-3 text-sm font-normal">
                            {{ session()->get('message') }}
                        </div>
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


                @foreach ($posts as $post)
                    <div class="grid-cols-1 gap-20 py-2 mx-3 border-gray-200 sm:grid ">

                        <ol
                            class="relative py-3 bg-gray-200 border-l border-gray-200 rounded-xl dark:border-gray-700 dark:bg-gray-800 ">
                            <li class="mb-2 ml-4 dark:bg-gray-800">
                                <div class="justify-between md:flex">
                                    <div>
                                        <div class="">
                                            <div class="text-xl ">
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
                                                <userprofile-component :userid={{ $post->user_id }}   online="{{ $Online }}"/>
                                            </div>
                                            <span
                                                class="flex text-sm font-light leading-snug text-gray-500 dark:text-yellow-400">
                                                <svg class="w-3 h-3 mt-1 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Created on
                                                {{ date('jS M Y', strtotime($post->created_at)) }}
                                            </span>
                                        </div>
                                    </div>

                                    <aside class="mx-5">
                                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">19 people found this
                                            helpful</p>
                                        <div
                                            class="flex items-center mt-3 space-x-3 divide-x divide-gray-200 dark:divide-gray-600">
                                            <a href="#"
                                                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-xs px-2 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Helpful</a>
                                            <a href="#"
                                                class="pl-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Report
                                                abuse</a>
                                        </div>
                                    </aside>
                                </div>


                                <h3
                                    class="mb-2 text-2xl font-semibold text-center text-yellow-900 hover:underline dark:text-yellow-500 ">
                                    {{ $post->title }}</h3>
                                <img class="mx-auto align-middle rounded-3xl"
                                    src="{{ asset('images/' . $post->image_path) }}" alt="" width=50%>
                                <div maxlength="20" class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{-- {!! html_entity_decode($post->description) !!} --}}




                                    <?php
                                    $string = strip_tags($post->description);
                                    $yourText = $post->description;
                                    if (strlen($string) > 950) {
                                        $stringCut = substr($post->description, 0, 950);
                                        $stringCut .= '<b class="text-green-800 ">...</b>';
                                        $doc = new DOMDocument();
                                        $doc->loadHTML($stringCut);
                                        $yourText = $doc->saveHTML();
                                    }
                                    ?>
                                    {!! html_entity_decode($yourText) !!}
                                </div>
                                <div
                                    class="inline-flex flex-row items-center px-2 py-2 space-x-2 text-sm font-medium right-2 md:px-4 focus:z-10 focus:ring-2">

                                    @if (isset(Auth::User()->id) && Auth::User()->id == $post->user_id)
                                        <div>
                                            <form action="{{ url('/blog/' . $post->slug) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <button
                                                    class="inline-flex items-center px-2 py-2 text-sm font-medium text-gray-900 bg-gray-300 border border-gray-200 rounded-lg focus:z-10 focus:ring-2 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:bg-gray-700 hover:bg-gray-500"
                                                    type="button" data-modal-toggle="popup-modal">
                                                    Delete
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                                    id="popup-modal" aria-hidden="true">
                                                    <div class="relative w-full h-full max-w-md px-4 md:h-auto">

                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

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
                                                                    Are you sure you want to delete this Post?</h3>
                                                                <button data-modal-toggle="popup-modal" type="submit"
                                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                    Yes, I'm sure
                                                                </button>
                                                                <button data-modal-toggle="popup-modal" type="button"
                                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No,
                                                                    cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div>

                                            <a href="{{ url('/blog/' . $post->slug . '/edit') }}"
                                                class="inline-flex items-center px-2 py-2 text-sm font-medium text-gray-900 bg-gray-300 border border-gray-200 rounded-lg focus:z-10 focus:ring-2 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:bg-gray-700 hover:bg-gray-500">
                                                Edit
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif


                                    <div>
                                        <a href="{{ url('/blog/' . $post->slug) }}"
                                            class="inline-flex items-center px-1 py-2 text-sm font-medium text-gray-900 bg-gray-300 border border-gray-200 rounded-lg md:px-3 focus:z-10 focus:ring-2 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:bg-gray-700 hover:bg-gray-500">
                                            Read more
                                            <svg class="w-3 h-3 " fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>

                                    </div>





                                </div>
                            </li>
                        </ol>

                    </div>
                @endforeach
                <br>
                <div class="px-3 bg-slate-600">
                    <?php echo $posts->render(); ?>
                </div>

            </div>
        </div>
    </div>

    <script type="application/javascript">
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    getData(page);
                }
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();

                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var myurl = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];

                getData(page);
            });

        });

        function getData(page) {
            $.ajax({
                url: '?page=' + page,
                type: "get",
                datatype: "html"
            }).done(function(data) {
                $("#tag_container").empty().html(data);
                location.hash = page;
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('No response from server');
            });
        }
    </script>
@endsection
