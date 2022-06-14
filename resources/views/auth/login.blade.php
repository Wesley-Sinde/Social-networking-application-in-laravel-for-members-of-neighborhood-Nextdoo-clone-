@extends('layouts.app')

@section('content')
    <main class="flex items-center justify-center sm:container sm:mx-auto sm:max-w-lg sm:mt-3 rounded-3xl">
        <div class="flex rounded-3xl">
            <div>
                <section
                    class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg dark:bg-gray-700 dark:text-gray-200 rounded-3xl">

                    <header
                        class="px-2 py-2 font-semibold text-gray-700 bg-gray-200 sm:py-2 sm:px-8 sm:rounded-t-md dark:bg-gray-800 dark:text-gray-200 ">
                        {{ __('Login') }}
                    </header>

                    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8 dark:bg-gray-700" method="POST"
                        action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap">
                            <label for="email" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4 dark:text-gray-200">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                required>

                            @error('password')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>




                        <div class="flex items-center justify-between mt-4">
                            <span class="w-1/5 border-b lg:w-1/4 dark:border-gray-200">
                            </span>
                            <a href="#"
                                class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">
                                or Log In With..
                            </a>
                            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4">
                            </span>
                        </div>

                        <div class="mt-4 space-y-3 sm:flex sm:items-center sm:space-x-4 sm:space-y-0">
                            <a href="/login/github"
                                class="flex items-center justify-center w-full px-4 py-2 space-x-3 text-sm text-center text-gray-600 transition-colors duration-300 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 48 48" style=" fill:#000000;">
                                    <path fill="#fbc02d"
                                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                    </path>
                                    <path fill="#e53935"
                                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                    </path>
                                    <path fill="#4caf50"
                                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                    </path>
                                    <path fill="#1565c0"
                                        d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">

                                    </path>
                                </svg>

                                <span class="text-sm text-gray-800 dark:text-gray-200">
                                    Google
                                </span></a> <a href="/login/twitter"
                                class="flex items-center justify-center w-full px-4 py-2 space-x-3 text-sm text-center text-gray-600 transition-colors duration-300 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700"><svg
                                    version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612"
                                    xml:space="preserve" class="w-5 h-5 text-blue-500 fill-current">
                                    <g>
                                        <path
                                            d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411 c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513 c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101 c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104 c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194 c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485 c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z">
                                        </path>
                                    </g>
                                </svg> <span class="text-sm text-gray-800 dark:text-gray-200">
                                    Twitter</span>
                            </a>
                        </div>







                        <div class="flex items-center">
                            <label class="inline-flex items-center text-sm text-gray-700 d dark:text-gray-200"
                                for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="ml-auto text-sm text-blue-500 no-underline whitespace-no-wrap hover:text-blue-700 hover:underline"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                                class="w-full p-3 text-base font-bold leading-normal text-gray-100 no-underline whitespace-no-wrap bg-blue-500 rounded-lg select-none hover:bg-blue-700 sm:py-4">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('register'))
                                <p
                                    class="w-full my-6 text-xs text-center text-gray-700 sm:text-sm sm:my-8 dark:bg-gray-700 dark:text-gray-200">
                                    {{ __("Don't have an account?") }}
                                    <a class="text-blue-500 no-underline hover:text-blue-700 hover:underline"
                                        href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                </section>
            </div>
        </div>
    </main>
@endsection
