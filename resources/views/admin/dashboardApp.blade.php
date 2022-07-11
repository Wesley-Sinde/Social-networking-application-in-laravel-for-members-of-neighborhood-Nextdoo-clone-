@extends('admin.layouts.app')

@section('content')
    <main>
        <div class="px-4 pt-6 bg-gray-100 dark:bg-gray-800 text-gary-700 dark:text-gray-200 ">
            <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-2 2xl:grid-cols-3">
                <div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div
                        class="flex items-center justify-between p-3 font-medium bg-gray-200 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                        <div
                            class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">1,257</p>
                            <p>Visitors</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-between p-3 font-medium bg-gray-200 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                        <div
                            class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">557</p>
                            <p>Orders</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-between p-3 font-medium bg-gray-200 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                        <div
                            class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">$11,257</p>
                            <p>Sales</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-between p-3 font-medium bg-gray-200 border-b-4 border-blue-600 rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-600 group">
                        <div
                            class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="text-blue-800 transition-transform duration-500 ease-in-out transform stroke-current dark:text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">$75,257</p>
                            <p>Balances</p>
                        </div>
                    </div>
                </div>

                <div
                    class="p-4 bg-gray-200 rounded-lg shadow dark:bg-gray-900 text-gary-700 dark:text-gray-200 sm:p-6 xl:p-8 2xl:col-span-2">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">$45,385</span>
                            <h3 class="text-base font-normal text-gray-500">Sales this week</h3>
                        </div>
                        <div class="flex items-center justify-end flex-1 text-base font-bold text-green-500">
                            12.5%
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="main-chart"></div>
                </div>

            </div>
            <!-- ./Statistics Cards -->

            <div class="grid grid-cols-1 gap-4 p-4 lg:grid-cols-2">

                <!-- Social Traffic -->
                <div
                    class="relative flex flex-col w-full min-w-0 mb-4 break-words rounded shadow-lg lg:mb-0 bg-gray-50 dark:bg-gray-800">
                    <div class="px-0 mb-0 border-0 rounded-t">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h3 class="text-base font-semibold text-gray-900 dark:text-gray-50">Social Traffic</h3>
                            </div>
                            <div class="relative flex-1 flex-grow w-full max-w-full text-right">
                                <button
                                    class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-blue-500 rounded outline-none dark:bg-gray-100 active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 focus:outline-none"
                                    type="button">See all</button>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Referral</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                            Visitors</th>
                                        <th
                                            class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap min-w-140-px">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Facebook</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            5,480</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">70%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                        <div style="width: 70%"
                                                            class="flex flex-col justify-center text-center text-white bg-blue-600 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Twitter</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            3,380</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">40%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                        <div style="width: 40%"
                                                            class="flex flex-col justify-center text-center text-white bg-blue-500 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Instagram</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            4,105</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">45%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-pink-200 rounded">
                                                        <div style="width: 45%"
                                                            class="flex flex-col justify-center text-center text-white bg-pink-500 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Google</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            4,985</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">60%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-red-200 rounded">
                                                        <div style="width: 60%"
                                                            class="flex flex-col justify-center text-center text-white bg-red-500 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th
                                            class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            Linkedin</th>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            2,250</td>
                                        <td
                                            class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="mr-2">30%</span>
                                                <div class="relative w-full">
                                                    <div class="flex h-2 overflow-hidden text-xs bg-blue-200 rounded">
                                                        <div style="width: 30%"
                                                            class="flex flex-col justify-center text-center text-white bg-blue-700 shadow-none whitespace-nowrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ./Social Traffic -->

                <!-- Recent Activities -->
                <div
                    class="relative flex flex-col w-full min-w-0 break-words rounded shadow-lg bg-gray-50 dark:bg-gray-800">
                    <div class="px-0 mb-0 border-0 rounded-t">
                        <div class="flex flex-wrap items-center px-4 py-2">
                            <div class="relative flex-1 flex-grow w-full max-w-full">
                                <h3 class="text-base font-semibold text-gray-900 dark:text-gray-50">Recent Activities
                                </h3>
                            </div>
                            <div class="relative flex-1 flex-grow w-full max-w-full text-right">
                                <button
                                    class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-blue-500 rounded outline-none dark:bg-gray-100 active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 focus:outline-none"
                                    type="button">See all</button>
                            </div>
                        </div>
                        <div class="block w-full">
                            <div
                                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                Today
                            </div>
                            <ul class="my-1">
                                <li class="flex px-4">
                                    <div class="flex-shrink-0 my-2 mr-3 bg-indigo-500 rounded-full w-9 h-9">
                                        <svg class="fill-current w-9 h-9 text-indigo-50" viewBox="0 0 36 36">
                                            <path
                                                d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex items-center flex-grow py-2 text-sm text-gray-600 border-b border-gray-100 dark:border-gray-400 dark:text-gray-100">
                                        <div class="flex items-center justify-between flex-grow">
                                            <div class="self-center">
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Nick Mark</a> mentioned <a
                                                    class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Sara Smith</a> in a new post
                                            </div>
                                            <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                    href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="transition-transform duration-500 ease-in-out transform">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex px-4">
                                    <div class="flex-shrink-0 my-2 mr-3 bg-red-500 rounded-full w-9 h-9">
                                        <svg class="fill-current w-9 h-9 text-red-50" viewBox="0 0 36 36">
                                            <path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex items-center flex-grow py-2 text-sm text-gray-600 border-gray-100 dark:text-gray-50">
                                        <div class="flex items-center justify-between flex-grow">
                                            <div class="self-center">
                                                The post <a
                                                    class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Post Name</a> was removed by
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Nick Mark</a>
                                            </div>
                                            <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                    href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="transition-transform duration-500 ease-in-out transform">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div
                                class="px-4 py-3 text-xs font-semibold text-left text-gray-500 uppercase align-middle bg-gray-100 border border-l-0 border-r-0 border-gray-200 border-solid dark:bg-gray-600 dark:text-gray-100 dark:border-gray-500 whitespace-nowrap">
                                Yesterday
                            </div>
                            <ul class="my-1">
                                <li class="flex px-4">
                                    <div class="flex-shrink-0 my-2 mr-3 bg-green-500 rounded-full w-9 h-9">
                                        <svg class="fill-current w-9 h-9 text-light-blue-50" viewBox="0 0 36 36">
                                            <path
                                                d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div
                                        class="flex items-center flex-grow py-2 text-sm text-gray-600 border-gray-100 dark:text-gray-50">
                                        <div class="flex items-center justify-between flex-grow">
                                            <div class="self-center">
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">240+</a> users have
                                                subscribed to <a
                                                    class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                    href="#0" style="outline: none;">Newsletter #1</a>
                                            </div>
                                            <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                    href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            class="transition-transform duration-500 ease-in-out transform">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ./Recent Activities -->
            </div>

            <!-- Task Summaries -->
            <div class="grid grid-cols-1 gap-4 p-4 text-black md:grid-cols-2 xl:grid-cols-3 dark:text-white">
                <div class="md:col-span-2 xl:col-span-3">
                    <h3 class="text-lg font-semibold">Task summaries of recent sprints</h3>
                </div>
                <div class="md:col-span-2 xl:col-span-1">
                    <div class="p-3 bg-gray-200 rounded dark:bg-gray-800">
                        <div class="flex justify-between py-1 text-black dark:text-white">
                            <h3 class="text-sm font-semibold">Tasks in TO DO</h3>
                            <svg class="h-4 text-gray-600 cursor-pointer fill-current dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                            </svg>
                        </div>
                        <div class="mt-2 text-sm text-black dark:text-gray-50">
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Delete all references from the wiki</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Remove analytics code</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Do a mobile first layout
                                <div class="flex items-start justify-between mt-2 ml-2 text-gray-500 dark:text-gray-200">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        3/5
                                    </span>
                                    <img src="https://i.imgur.com/OZaT7jl.png" class="rounded-full" />
                                </div>
                            </div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Check the meta tags</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Think more tasks for this example
                                <div class="flex items-start justify-between mt-2 ml-2 text-gray-500 dark:text-gray-200">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        0/3
                                    </span>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="p-3 bg-gray-200 rounded dark:bg-gray-800">
                        <div class="flex justify-between py-1 text-black dark:text-white">
                            <h3 class="text-sm font-semibold">Tasks in DEVELOPMENT</h3>
                            <svg class="h-4 text-gray-600 cursor-pointer fill-current dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                            </svg>
                        </div>
                        <div class="mt-2 text-sm text-black dark:text-gray-50">
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Delete all references from the wiki</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Remove analytics code</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Do a mobile first layout
                                <div class="flex items-start justify-between mt-2 ml-2 text-xs text-white">
                                    <span class="flex items-center p-1 text-xs bg-pink-600 rounded">
                                        <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Check the meta tags</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Think more tasks for this example
                                <div class="flex items-start justify-between mt-2 ml-2 text-gray-500">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        0/3
                                    </span>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="p-3 bg-gray-200 rounded dark:bg-gray-800">
                        <div class="flex justify-between py-1 text-black dark:text-white">
                            <h3 class="text-sm font-semibold">Tasks in QA</h3>
                            <svg class="h-4 text-gray-600 cursor-pointer fill-current dark:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                            </svg>
                        </div>
                        <div class="mt-2 text-sm text-black dark:text-gray-50">
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Delete all references from the wiki</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Remove analytics code</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Do a mobile first layout</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Check the meta tags</div>
                            <div
                                class="p-2 mt-1 bg-white border-b border-gray-100 rounded cursor-pointer dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 dark:border-gray-900">
                                Think more tasks for this example
                                <div class="flex items-start justify-between mt-2 ml-2 text-gray-500 dark:text-gray-200">
                                    <span class="flex items-center text-xs">
                                        <svg class="h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 50 50">
                                            <path
                                                d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                        </svg>
                                        0/3
                                    </span>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Task Summaries -->
            <div class="grid w-full grid-cols-1 gap-4 mt-4 md:grid-cols-2 xl:grid-cols-3">
                <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">2,340</span>
                            <h3 class="text-base font-normal text-gray-500">New products this week</h3>
                        </div>
                        <div class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-green-500">
                            14.6%
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">5,355</span>
                            <h3 class="text-base font-normal text-gray-500">Visitors this week</h3>
                        </div>
                        <div class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-green-500">
                            32.9%
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">385</span>
                            <h3 class="text-base font-normal text-gray-500">User signups this week</h3>
                        </div>
                        <div class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-red-500">
                            -2.7%
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 my-4 2xl:grid-cols-2 xl:gap-4">
                <div class="h-full p-4 mb-4 bg-white rounded-lg shadow sm:p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold leading-none text-gray-900">Latest Customers</h3>
                        <a href="#"
                            class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">
                            View all
                        </a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://demo.themesberg.com/windster/images/users/neil-sims.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="17727a767e7b57607e7973646372653974787a">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                        $320
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://demo.themesberg.com/windster/images/users/bonnie-green.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Bonnie Green
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                        $3467
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://demo.themesberg.com/windster/images/users/michael-gough.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Michael Gough
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="57323a363e3b17203e3933242332257934383a">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                        $67
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://demo.themesberg.com/windster/images/users/thomas-lean.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Thomes Lean
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                        $2367
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://demo.themesberg.com/windster/images/users/lana-byrd.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Lana Byrd
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                        $367
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                    <h3 class="mb-10 text-xl font-bold leading-none text-gray-900">Acquisition Overview</h3>
                    <div class="block w-full overflow-x-auto">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">
                                        Top Channels</th>
                                    <th
                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">
                                        Users</th>
                                    <th
                                        class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap min-w-140-px">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="text-gray-500">
                                    <th
                                        class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                        Organic Search</th>
                                    <td
                                        class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                        5,649</td>
                                    <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">30%</span>
                                            <div class="relative w-full">
                                                <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                    <div class="h-2 rounded-sm bg-cyan-600" style="width: 30%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-gray-500">
                                    <th
                                        class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                        Referral</th>
                                    <td
                                        class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                        4,025</td>
                                    <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">24%</span>
                                            <div class="relative w-full">
                                                <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                    <div class="h-2 bg-orange-300 rounded-sm" style="width: 24%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-gray-500">
                                    <th
                                        class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                        Direct</th>
                                    <td
                                        class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                        3,105</td>
                                    <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">18%</span>
                                            <div class="relative w-full">
                                                <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                    <div class="h-2 bg-teal-400 rounded-sm" style="width: 18%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-gray-500">
                                    <th
                                        class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                        Social</th>
                                    <td
                                        class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                        1251</td>
                                    <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">12%</span>
                                            <div class="relative w-full">
                                                <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                    <div class="h-2 bg-pink-600 rounded-sm" style="width: 12%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-gray-500">
                                    <th
                                        class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                        Other</th>
                                    <td
                                        class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                        734</td>
                                    <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">9%</span>
                                            <div class="relative w-full">
                                                <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                    <div class="h-2 bg-indigo-600 rounded-sm" style="width: 9%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-gray-500">
                                    <th
                                        class="p-4 pb-0 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                        Email</th>
                                    <td
                                        class="p-4 pb-0 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                        456</td>
                                    <td class="p-4 pb-0 text-xs align-middle border-t-0 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="mr-2 text-xs font-medium">7%</span>
                                            <div class="relative w-full">
                                                <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                    <div class="h-2 bg-purple-500 rounded-sm" style="width: 7%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
