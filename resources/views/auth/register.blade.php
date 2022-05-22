@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 dark:bg-gray-900 flex justify-center items-center h-screen">
        <div>
            <section
                class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg dark:bg-gray-800 dark:text-gray-200 
                    rounded-l 
                      ">

                <header
                    class="px-2 py-2 font-semibold text-gray-700 bg-gray-200 sm:py-2 sm:px-8 sm:rounded-t-md dark:bg-gray-800 dark:text-gray-200  shadow-md flex justify-center items-center border-b">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 dark:bg-gray-800" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4 dark:text-gray-200">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name') border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4  dark:text-gray-200">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password"
                            class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4  dark:text-gray-200">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm"
                            class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4  dark:text-gray-200">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="w-full form-input" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <div class="relative mr-3 w-full revue-form-group">


                            <div class="flex absolute  items-center pl-3 my-auto pt-3">

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293zM9 4a1 1 0 012 0v2H9V4z">
                                    </path>
                                </svg>
                            </div>

                            <button type="submit"
                                class="w-full p-3 text-base font-bold leading-normal text-gray-100 no-underline whitespace-no-wrap bg-blue-500 rounded-lg select-none hover:bg-gray-200 sm:py-4 dark:text-gray-100 dark:hover:bg-green-700  ">
                                {{ __('Register') }}
                            </button>


                        </div>



                        <p class="w-full my-6 text-xs text-center text-gray-700 sm:text-sm sm:my-8  dark:text-gray-200">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 no-underline hover:text-blue-700 hover:underline"
                                href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>

        </div>
    </main>
@endsection
