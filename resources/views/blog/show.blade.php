    @extends('layouts.app')

    @section('content')
        <div class="flex">

            @include('layouts.asidenav')
            <section class="m-4 bg-white border rounded-md dark:bg-gray-900">
                <div class="grid-cols-1 gap-3 py-8 mx-auto border-b border-gray-200 sm:grid">
                    <div class="">
                        <div class="text-xl ">
                            <userprofile-component :userid={{ $post->user_id }} online="{{ $Online }}" />
                        </div>
                        <span class="flex text-sm font-light leading-snug text-gray-500 dark:text-yellow-400">
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
                    <div class="p-4 align-middle">
                        <img class="align-middle rounded-3xl" src="{{ asset('images/' . $post->image_path) }}"
                            alt="" width=50%>

                        <h2 class="pb-4 text-3xl font-bold text-gray-900 dark:text-white ">
                            {{ $post->title }}
                        </h2>



                        <div class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                            {!! html_entity_decode($post->description) !!}
                        </div>
                        <div class="m-5 ">

                            <div
                                class="flex flex-row px-4 py-2 space-x-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg nline-flex hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600">

                                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                    <div>
                                        <form action="/blog/{{ $post->slug }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button
                                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-red-700 dark:focus:ring-blue-800"
                                                type="button" data-modal-toggle="popup-modal">
                                                Delete This Post
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                                                                Are you sure you want to delete this Post?
                                                            </h3>
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
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-blue-700">
                                            Edit Post
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                @endif


                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
