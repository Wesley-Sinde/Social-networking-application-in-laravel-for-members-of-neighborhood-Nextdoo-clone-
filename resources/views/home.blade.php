@extends('layouts.app')
@section('content')
    <link rel="stylesheet" rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <div class=" mx-3 px-3">
        <div class="mx-2 grid gap-4  md:grid-cols-2  2">
            <div>
                <div class="mx-2 grid gap-1  grid-cols-1  ">
                    <span class="font-light text-gray-400 underline hover:text-yellow-700">You
                        family</span>
                    <div class="flex flex-col mt-2 space-y-1 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-1">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                            Get To Know Your neighber
                        </h3>
                        <a href="/emergency"
                            class="text-gray-400 underline hover:underline underline-offset-auto hover:font-serif hover:dark:text-yellow-400">
                            Need help i am in emergency!
                        </a>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 lg:max-w-xl description-link">
                        Get the most out of your neighborhood with family. You can Instantly connect with your
                        neighborhood..
                    </p>

                </div>
                <div class="mt-2 h-7 space-y-4 lg:flex lg:space-x-4 lg:space-y-0 place-self-end">
                    <a href="https://twitter.com/intent/tweet?text=Check%20out%20new%20free%20app%20to%20know%20all%20about%20your%20neighbour%20This%20app%20allows%20you%20to%20communicate%20to%20neigbours%20in%20any%20area%20you%20are%20irrespetive%20of%20if%20you%20know%20them%20check%20out%20the%20app%20at%20&amp;url=https%3A%2F%2Fwesley.io.ke%you%20will%20enjoy"
                        target="_blank"
                        class="flex items-center justify-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-300 transform border rounded-lg dark:text-gray-200 dark:border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none"><svg
                            viewBox="0 0 512 512" class="w-5 h-5 text-gray-500 fill-current">
                            <title>Logo Twitter</title>
                            <path
                                d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z">
                            </path>
                        </svg>
                        <span class="mx-2">Share on twitter</span>
                    </a>
                </div>
            </div>

            <div class="w-full h-full custom-slant">
                <div class="relative hide-with-banner">
                    <a href="https://a.paddle.com/v2/click/37973/127422?link=3167" target="_blank"
                        class="flex flex-col w-full h-full py-4">
                        <div class="z-10 flex-col items-start justify-center w-4/5 px-6 xl:px-10">


                            <p class="mb-3 font-sans text-2xl font-black text-white">
                                Open Source Project
                                <span class="block font-light">Need to impove our Project?</span>
                            </p>
                            <div>
                                <span class="h-8 px-4 py-2 font-sans text-xs font-bold text-blue-600 bg-white rounded-full">
                                    Github link..
                                </span>
                            </div>
                        </div>
                        <img src="\images\app\tails.webp"
                            class="absolute bottom-0 left-0 object-cover w-full h-full overflow-hidden rounded-md">
                    </a>
                </div>
            </div>
        </div>



        <div
            class="items-center justify-center my-2 mx-auto bg-gray-900 border border-gray-200 rounded-lg dark:border-gray-200 dark:bg-gray-900">
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img class="items-center justify-center object-cover w-full h-1/4 opacity-50 " src="\images\app\team.jpg"
                    alt="Family" width=50% />

                <div class="absolute top-0 left-0 px-6 py-4 text-gray-200 dark:text-gray-200">
                    <h4 class="mb-3 text-3xl font-semibold tracking-tight text-yellow-600 dark:text-yellow-600 ">
                        We believe in the possibilities nearby
                    </h4>
                    <p class="text-lg leading-normal text-gray-200 0">
                        Myneighbor is where you connect to the neighborhoods that matter to you so you can belong.

                        <br>
                        By bringing neighbors and organizations together, we can cultivate a kinder world where everyone
                        has a neighborhood they can rely on.
                    </p>
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-yellow-600 dark:text-yellow-600">
                        The neighborhood network
                    </h4>
                    <p class="text-lg ">
                        Neighbors around the world turn to Myneighbor daily to receive trusted information, give and get
                        help, get things done, and build real-world connections with those nearby — neighbors,
                        businesses, and public services.

                    </p>
                    <br>
                    <p class="text-lg ">
                        We believe connecting with others is a universal human need. That truth, and the reality that
                        neighborhoods are among the most important communities in our lives, have been guiding
                        principles for Myneighbor since the beginning.

                    </p>


                </div>
            </div>
        </div>

        <div class=" text-center mx-auto  text-3xl font-extrabold text-yellow-600 rounded-3xl   dark:text-yellow-600 ">
            <h2 class="  border-gray-600 dark:border-gray-700 ">
                Where do we offer?
            </h2>
        </div>

        <div class="mt-2 mx-2 grid md:grid-cols-2">
            <div>
                <img class=" mx-auto" src="\images\app\globe.png" alt="world image">
                <div class="py-2 text-center  mx-auto text-xl text-gray-500 dark:text-gray-300">
                    11 countries
                    <br>
                    285,000 neighborhoods globally
                </div>
            </div>
            <div class="block m-auto text-left sm:m-auto">
                <div class=" mx-auto">

                    <div
                        class="max-w-md  bg-gray-300 border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">
                                Countries
                            </h3>
                            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                View all
                            </a>
                        </div>
                        <div class="flow-root">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://img.icons8.com/color/48/000000/kenya-circular.png" alt="kenya">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Kenya
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Joined in 2022
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            3k members
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://img.icons8.com/color/48/000000/uganda-circular.png"
                                                alt="UGANDA">
                                        </div>


                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Uganda
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Joined in 2022
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            1K Members
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://img.icons8.com/color/48/000000/tanzania-circular.png"
                                                alt="TANZANIA">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Tanzania
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Joined 2022
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            500 members
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="https://img.icons8.com/color/48/000000/south-sudan-circular.png"
                                                alt="South Sudan">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                South Sudan
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                Yeet to join this Year
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            Not Available
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w my-4 border-b-2 border-gray-400 dark:border-gray-800">
        </div>
        <div>
            <h2
                class="w-auto my-4 hover:underline text-4xl font-bold tracking-tight text-center  text-gray-700 dark:text-gray-300 underline-offset-auto ">
                How Are We Unique
            </h2>
        </div>
        <div class="grid gap-6 mx-auto sm:grid-cols-3 ">

            <div class="relative m-2 mb-10 border-gray-800 shadow-lg each dark:border-gray-600">
                <img class="m-auto w-44" src="\images\app\Essential.png" alt="" />

                <div class="p-4 desc tetext-gray-600 dark:text-gray-400">
                    <a href="#" class="block font-bold cursor-pointer title hover:underline">Essential</a>

                    <span class="block py-2 mb-2 text-sm border-gray-400 description">
                        Relevant news and information from neighbors, businesses, and public agencies in real time.
                    </span>
                </div>
            </div>
            <!-- each -->
            <div class="relative m-2 mb-10 border-gray-800 shadow-lg each">
                <img class="m-auto w-44" src="\images\app\Local.png" alt="" />

                <div class="p-4 desc tetext-gray-600 dark:text-gray-400">
                    <a href="#" class="block font-bold cursor-pointer title hover:underline">Local</a>

                    <span class="block py-2 mb-2 text-sm border-gray-400 description">
                        The only way to instantly connect to the people, businesses, and happenings near your home
                    </span>
                </div>
            </div>
            <!-- each -->
            <div class="relative m-2 mb-10 border-gray-800 shadow-lg each">
                <img class="m-auto w-44" src="\images\app\Trusted.png" alt="" />

                <div class="p-4 desc tetext-gray-600 dark:text-gray-400">
                    <a href="#" class="block font-bold cursor-pointer title hover:underline">Trusted</a>

                    <span class="block py-2 mb-2 text-sm border-gray-400 description">
                        A secure environment where all neighbors are verified.
                    </span>
                </div>
            </div>
            <!-- each -->
        </div>

        <div class="w my-4 border-b-2 border-gray-400">
        </div>

        <div class="container flex flex-col items-center py-3 mx-auto sm:py-4">

            <div aria-label="Home. logo" role="img">
                <img class="w-12 md:w-auto"
                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/centre_aligned_simple-Svg1.svg" alt="logo" />
            </div>
            <div class="flex-col items-center justify-center w-11/12 mb-2 sm:w-2/3 lg:flex sm:mb-10">
                <h1
                    class="text-2xl font-black leading-7 text-center text-yellow-600 sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl md:leading-10 dark:text-yellow-600">
                    The Freedom To Know Your
                    <span class="text-indigo-700">neighborhood</span>
                    In Time
                </h1>
                <p class="mt-2 text-sm font-normal text-center text-gray-400 sm:mt-10 lg:w-10/12 sm:text-lg">
                    Instantly connect with your neighborhood
                </p>
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="px-4 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-400 lg:text-xl lg:font-bold sm:px-10 sm:py-4">
                    Get
                    Started
                </button>
                <button
                    class="px-4 py-2 ml-4 text-sm text-indigo-700 transition duration-150 ease-in-out bg-transparent border border-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:border-indigo-600 lg:text-xl lg:font-bold hover:text-indigo-600 sm:px-10 sm:py-4 hover:bg-gray-700">
                    Already have an account?
                </button>
            </div>
        </div>

        <!-- component -->
        <div class="py-3 overflow-hidden">
            <div class="container px-6 m-auto space-y-1 md:px-2 ">
                <div>
                    <h2
                        class="w-auto my-4 text-4xl font-bold tracking-tight text-center underline dark:text-gray-300 underline-offset-auto">
                        Our Features
                    </h2>
                </div>
                <div class="grid gap-6 mx-auto sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                    <div
                        class="relative group bg-gray-200 dark:bg-gray-800 rounded-lg transition hover:z-[1] hover:shadow-2xl">
                        <div class="relative p-8 space-y-8">
                            <img class="m-auto w-40" src="/images/app/neighbor.png" class="w-10" width="512"
                                height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-medium text-gray-800 transition dark:text-gray-200 group-hover:text-yellow-600">
                                    Neighbors
                                </h5>
                                <p class="text-sm text-gray-600 dark:text-gray-200">
                                    Connect
                                    with the people you already wave to in your neighborhood, or those
                                    you have
                                    yet to meet.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative group bg-gray-200 dark:bg-gray-800 rounded-lg transition hover:z-[1] hover:shadow-2xl">
                        <div class="relative p-8 space-y-8">
                            <img class="m-auto w-40" src="images/app/business.png" class="w-10" width="512"
                                height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-medium text-gray-800 transition dark:text-gray-200 group-hover:text-yellow-600">
                                    Businesses
                                </h5>
                                <p class="text-sm text-gray-600 dark:text-gray-200">
                                    Instantly reach your most valuable customers — your neighbors — and become a
                                    trusted part of the neighborhood.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative group bg-gray-200 dark:bg-gray-800 rounded-lg transition hover:z-[1] hover:shadow-2xl">
                        <div class="relative p-8 space-y-8">
                            <img class="m-auto w-40" src="/images/app/nonProfit.png" class="w-10" width="512"
                                height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-medium text-gray-800 transition dark:text-gray-200 group-hover:text-yellow-600">
                                    Nonprofits
                                </h5>
                                <p class="text-sm text-gray-600 dark:text-gray-200">
                                    Engage with the people who need you most and find support from donors nearby
                                    with
                                    features like Sell for Good.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="relative group bg-gray-200 dark:bg-gray-800 rounded-lg transition hover:z-[1] hover:shadow-2xl">
                        <div class="relative p-8 space-y-8">
                            <img class="m-auto w-40" src="/images/app/public.png" class="w-10" width="512"
                                height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-medium text-gray-800 transition dark:text-gray-200 group-hover:text-yellow-600">
                                    Public agencies
                                </h5>
                                <p class="text-sm text-gray-600 dark:text-gray-200">
                                    Share critical, real-time information directly at the neighborhood level.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container max-w-6xl mx-auto mt-4">
                <h2
                    class="w-auto text-4xl font-bold tracking-tight text-center underline dark:text-gray-300 underline-offset-auto">
                    MORE ABOUT US.
                </h2>
                <p class="mt-2 text-lg text-center text-gray-600 dark:text-gray-400">
                    How we're different
                </p>
                <div class="grid gap-6 mx-auto sm:grid-cols-3">
                    {{-- grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0 --}}

                    <div
                        class="relative flex flex-col items-center justify-between px-8 py-12 space-y-4 overflow-hidden bg-gray-200 dark:bg-gray-800 rounded-xl">
                        <div class="p-3 text-white bg-blue-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                                <circle cx="6" cy="14" r="3"></circle>
                                <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-500 dark:text-gray-400 ">Trust </h4>
                        <p class="text-base text-center text-gray-500 dark:text-gray-400 ">
                            We ensure you're connected to real people in neighborhoods that matter to you.
                        </p>
                    </div>

                    <div
                        class="relative flex flex-col items-center justify-between py-12 px-2 space-y-4 overflow-hidden bg-gray-200 dark:bg-gray-800 rounded-xl">
                        <div class="p-3 text-white bg-blue-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18 8a3 3 0 0 1 0 6"></path>
                                <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path>
                                <path
                                    d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-500 dark:text-gray-400 ">Local perspective</h4>
                        <p class="text-base text-center text-gray-500 dark:text-gray-400 ">
                            Whether you need to find a local professional or a lost dog, your neighbors can help — and
                            you
                            can reach out to them instantly.
                        </p>
                    </div>

                    <div
                        class="relative flex flex-col items-center justify-between  py-12 space-y-4 overflow-hidden bg-gray-200 dark:bg-gray-800 rounded-xl">
                        <div class="p-3 text-white bg-blue-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                                <line x1="12" y1="12" x2="20" y2="7.5"></line>
                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                <line x1="12" y1="12" x2="4" y2="7.5"></line>
                                <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                            </svg>
                        </div>
                        <h4 class="text-xl font-medium text-gray-500 dark:text-gray-400 ">Proximity</h4>
                        <p class="text-base text-center text-gray-500 dark:text-gray-400 ">
                            You're automatically connected to everyone nearby so you can build real-world
                            connections.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="py-4 white">
        <div class="container m-auto px-6 text-gray-600 md:px-4 xl:px-6">
            <h2 class="mb-4 text-center text-2xl text-gray-900 dark:text-yellow-300 font-bold md:text-4xl">What's our <span
                    class=" text-blue-500">customers</span> saying</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper pb-6">
                    <div class="swiper-slide">
                        <div class="mx-auto text-center space-y-6 md:w-8/12 lg:w-7/12">
                            <img class="w-16 h-16 mx-auto rounded-full"
                                src="https://tailus.io/sources/blocks/tested/preview/images/avatars/second_user.webp"
                                alt="user avatar" height="220" width="220" loading="lazy">
                            <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                                aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
                                repudiandae ad doloribus. <span class="font-serif">"</span></p>
                            <div>
                                <h6 class="text-lg font-semibold leading-none">John Doe</h6>
                                <span class="text-xs text-gray-500">Product Designer</span>
                            </div>
                            <img class="mx-auto"
                                src="https://tailus.io/sources/blocks/tested/preview/images/clients/client-4.png"
                                alt="company logo" height="400" width="142" loading="lazy">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="mx-auto text-center space-y-6 md:w-8/12 lg:w-7/12">
                            <img class="w-16 h-16 mx-auto rounded-full"
                                src="https://tailus.io/sources/blocks/tested/preview/images/avatars/first_user.webp"
                                alt="user avatar" height="220" width="220" loading="lazy">
                            <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                                aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
                                repudiandae ad doloribus. <span class="font-serif">"</span></p>
                            <div>
                                <h6 class="text-lg font-semibold leading-none">John Doe</h6>
                                <span class="text-xs text-gray-500">Product Designer</span>
                            </div>
                            <img class="mx-auto"
                                src="https://tailus.io/sources/blocks/tested/preview/images/clients/client-3.png"
                                alt="company logo" height="400" width="142" loading="lazy">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="mx-auto text-center space-y-6 md:w-8/12 lg:w-7/12">
                            <img class="w-16 h-16 mx-auto rounded-full"
                                src="https://tailus.io/sources/blocks/tested/preview/images/avatars/third_user.webp"
                                alt="user avatar" height="220" width="220" loading="lazy">
                            <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                                aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti
                                repudiandae ad doloribus. <span class="font-serif">"</span></p>
                            <div>
                                <h6 class="text-lg font-semibold leading-none">Johanson Doe</h6>
                                <span class="text-xs text-gray-500">Product Designer</span>
                            </div>
                            <img class="mx-auto"
                                src="https://tailus.io/sources/blocks/tested/preview/images/clients/client-8.png"
                                alt="company logo" height="400" width="142" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <script type="application/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script type="application/javascript">
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 5000,
            },
            pauseOnMouseEnter: true,
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
