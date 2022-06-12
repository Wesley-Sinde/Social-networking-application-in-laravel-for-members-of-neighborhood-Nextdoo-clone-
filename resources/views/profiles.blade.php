@extends('layouts.app')

@section('content')
    <div class="flex">
        @include('layouts.asidenav')
        <section class="bg-white dark:bg-gray-900">
            <script type="application/javascript" src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
            <div class="m-8 border-2 rounded-2xl border-cool-gray-300 dark:border-cool-gray-500 p-7">

                @if (session()->has('message'))
                    <div id="toast-success"
                        class="flex items-center max-w-xs p-4 mb-1 text-gray-500 bg-white rounded-lg shadow top-5 dark:text-gray-400 dark:bg-gray-800"
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
                <div class="m-8 p-7" id="appprofile">
                    <header
                        class="px-6 py-5 font-semibold text-center text-gray-700 capitalize bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md dark:bg-gray-800 dark:text-gray-200">
                        {{ $profile->name }} {{ __(' Profile') }}
                    </header>
                    <div class="sticky items-center justify-center align-middle my-7 removeThis">
                        @if ($profile->avatar)
                            <img id="output"
                                class="justify-center w-48 mx-auto border-2 border-yellow-200 rounded-full dark:border-gray-400"
                                src="{{ asset('images/User/' . $profile->avatar) }}" alt="User photo">
                        @else
                            <img id="output"
                                class="justify-center w-48 mx-auto border-2 border-yellow-200 rounded-full dark:border-gray-400"
                                src="{{ asset('images/User.png') }}" alt="User photo">
                        @endif
                    </div>


                    @if ($errors->any())
                        <div class="w-4/5 m-auto ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li id="errorAlert"
                                        class="flex p-4 mb-4 bg-red-100 border-t-4 border-red-500 dark:bg-red-200"
                                        role="alert">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="ml-3 text-sm font-medium text-red-700">
                                            {{ $error }}
                                        </div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 dark:bg-red-200 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 dark:hover:bg-red-300 inline-flex h-8 w-8"
                                            data-dismiss-target="#errorAlert" aria-label="Close">
                                            <span class="sr-only">Dismiss</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="grid-cols-2 gap-10 mx-auto sm:grid ">
                        @if (Auth::User()->id == $profile->id)
                            <div class="relative z-0 w-full mb-6 sm:mb-0 group">
                                <span
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                    {{ Auth::User()->email }}
                                </span>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                    address</label>
                            </div>
                        @endif

                        <div class="relative z-0 w-full mb-6 sm:mb-0 group">
                            <span id="floating_first_name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                {{ $profile->name }}
                            </span>
                            <label for="floating_first_name"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Name
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <?php
                                $original_date = $profile->dob;
                                // Creating timestamp from given date
                                $timestamp = strtotime($original_date);
                                // Creating new date format from that timestamp
                                $new_date = date('d-m-Y', $timestamp);
                                ?>
                                <span
                                    class=" block w-full pl-10 p-2.5  dark:text-white  focus:ring-0 dark:focus:border-blue-500 peer appearance-none focus:outline-none border-gray-300 border-b-2 border-0 bg-transparent text-gray-900 py-2.5 px-0  text-sm dark:border-gray-600 focus:border-blue-600">
                                    <?php echo $new_date; ?>
                                </span>
                            </div>
                            {{-- {{ Auth::User()->dob }} --}}
                            <label for="dob"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Date Of Birth
                            </label>
                        </div>






                        <div class="flex flex-col">
                            <div class="relative z-0 w-full mb-6 group">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                            </path>
                                        </svg>
                                    </div>
                                    <label
                                        class=" block w-full pl-10 p-2.5  dark:text-white  focus:ring-0 dark:focus:border-blue-500 peer appearance-none focus:outline-none border-gray-300 border-b-2 border-0 bg-transparent text-gray-900 py-2.5 px-0  text-sm dark:border-gray-600 focus:border-blue-600">
                                        {{ $profile->username }}
                                    </label>


                                </div>
                                <label for="Username"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Username
                                </label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 sm:mb-0 group">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                Country</label>
                            <span
                                class="bg-gray-50 border-0 border-b-gray-300 border-b-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-900 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                {{ $profile->country }}
                            </span>

                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="gender"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Gender</label>
                            <span
                                class="bg-gray-50 border-0 border-b-gray-300 border-b-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-900 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                {{ Auth::User()->gender }}
                            </span>
                        </div>
                    </div>


                    <div class="mb-6 ">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                {{ $profile->name }} Bio
                            </label>
                            <span
                                class="bg-gray-50 border-0 border-b-gray-300 border-b-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-900 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                {{ $profile->bio }}
                            </span>
                        </div>



                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
