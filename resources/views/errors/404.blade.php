<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://giphy.com/static/img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/errorPage.css') }}">
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <?php
    header('Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure');
    ?>
</head>

<body class="overflow-x-hidden h-screen bg-fixed bg-gradient-to-b from-gray-900 to-[#052436]"
    style="scroll-behavior:smooth;">
    <section class="h-full py-6 flex items-center">
        <div class="container m-auto px-4 sm:px-6 md:px-12">
            <div
                class="w-11/12 sm:w-full lg:w-8/12 m-auto relative
                        before:absolute before:top-8 before:left-0 before:right-0 before:w-full before:h-6 before:border-b before:border-t before:border-sky-800 before:scale-x-110 sm:before:scale-x-105
                        after:absolute after:bottom-8 after:left-0 after:right-0 after:w-full after:h-6 after:border-b after:border-t after:border-sky-800 after:scale-x-110 sm:after:scale-x-105">
                <div class="md:w-8/12 m-auto flex  gap-4 sm:gap-6 text-lg font-medium text-sky-200">
                    <div class="w-2/6 h-52 sm:h-56 my-auto py-14 sm:border-l border-r  border-sky-800">
                        <div class="h-full flex justify-center items-center">
                            <span
                                class="heading bg-gradient-to-b from-pink-400 to-purple-500 text-7xl sm:text-9xl font-black">4</span>
                        </div>
                    </div>
                    <div class="w-2/6 px-2 py-16 border-l border-r border-cyan-100">
                        <div class="h-full py-4 flex justify-center items-center">
                            <span role="hidden"
                                class="absolute block w-12 h-12 sm:w-25 sm:h-25 rounded-full bg-gray-900">

                            </span>
                            <span role="hidden"
                                class="block w-20 h-20 sm:w-32 sm:h-32 rounded-full bg-gradient-to-tr from-sky-500 to-green-300"></span>
                        </div>
                    </div>
                    <div class="w-2/6 h-52 sm:h-56 my-auto py-14 border-l sm:border-r border-sky-800">
                        <div class="h-full flex justify-center items-center">
                            <span
                                class="heading bg-gradient-to-b from-yellow-400 to-pink-500 text-7xl sm:text-9xl font-black">4</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-6 flex flex-col items-center justify-center">
                <div class="space-y-2 text-center">
                    <h2 class="text-3xl font-bold text-white">Page not found</h2>
                    <p class="text-gray-400">The page you requested cannot be found</p>
                </div>
                <a href="/" title="Go back home"
                    class="block group py-3 px-6 rounded-xl bg-sky-900 hover:bg-sky-800 active:bg-cyan-900 focus:bg-cyan-800 transition">
                    <span
                        class="tracking-wide font-medium text-cyan-300 group-hover:text-cyan-200 group-focus:text-cyan-200">
                        Back home
                    </span>
                </a>
            </div>
        </div>
    </section>
</body>

</html>
