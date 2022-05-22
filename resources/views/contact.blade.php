@extends('layouts.app')
@section('content')
    <div class="flex">
        @if (isset(Auth::User()->id))
            @include('layouts.asidenav')
        @endif
        <section class="bg-white dark:bg-gray-900 mx-3 px-3 w-full">

            <!-- component -->
            <div class="w-full bg-gray-200 shadow dark:bg-gray-800 rounded-xl ">
                <div class=" mx-auto px-6 sm:px-6 lg:px-8 mb-2">
                    <div class=" w-full  rounded p-8 sm:p-12 mt-3">
                        <p class="text-3xl font-bold leading-7 text-center text-yellow-600">Contact Us</p>
                        <form action="" method="post">
                            <div class="md:flex items-center mt-12">
                                <div class="w-full md:w-1/2 flex flex-col">
                                    <label class="font-semibold leading-none dark:text-gray-300">Name</label>
                                    <input type="text"
                                        class="leading-none  p-3 focus:outline-none focus:border-blue-700 mt-4 border-0  rounded" />
                                </div>
                                <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                                    <label class="font-semibold leading-none dark:text-gray-300">Phone</label>
                                    <input type="email"
                                        class="leading-none  p-3 focus:outline-none focus:border-blue-700 mt-4 border-0  rounded" />
                                </div>
                            </div>
                            <div class="md:flex items-center mt-8">
                                <div class="w-full flex flex-col">
                                    <label class="font-semibold leading-none dark:text-gray-300">Subject</label>
                                    <input type="text"
                                        class="leading-none  p-3 focus:outline-none focus:border-blue-700 mt-4 border-0  rounded" />
                                </div>

                            </div>
                            <div>
                                <div class="w-full flex flex-col mt-8">
                                    <label class="font-semibold leading-none dark:text-gray-300">Message</label>
                                    <textarea type="text"
                                        class="h-40 text-base leading-none  p-3 focus:outline-none focus:border-blue-700 mt-4  border-0 rounded"></textarea>
                                </div>
                            </div>
                            <div class="flex items-center justify-center w-full">
                                <button
                                    class="mt-9 font-semibold leading-none  py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                                    Send message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
