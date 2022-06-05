<!-- Chart cards (Four columns grid) -->
<div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-4">
    <!-- Users chart card --><a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Total Users</span>
                <span class="text-lg font-semibold">100,221</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="usersChart"></canvas>
            </div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2020</span>
        </div>
    </a>

    <!-- Sessions chart card --><a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Sessions</span>
                <span class="text-lg font-semibold">40%</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="sessionsChart"></canvas>
            </div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">1.2%</span>
            <span>from 2020</span>
        </div>
    </a>

    <!-- Vists chart card --><a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Vists</span>
                <span class="text-lg font-semibold">300,527</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="vistsChart"></canvas>
            </div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">10%</span>
            <span>from 2020</span>
        </div>
    </a>

    <!-- Articles chart card --><a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Articles</span>
                <span class="text-lg font-semibold">600,429</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="articlesChart"></canvas>
            </div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">30%</span>
            <span>from 2020</span>
        </div>
    </a>
</div>

<!-- Two columns grid -->
<div class="grid grid-cols-1 gap-6 mt-6 lg:grid-cols-2 xl:grid-cols-4">
    <!-- Import data card -->
    <div class="border rounded-lg shadow-sm">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-2 border-b">
            <h5 class="font-semibold">Import Data</h5>
            <!-- Dots button -->
            <button class="p-2 rounded-full">
                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                    </path>
                </svg>
            </button>
        </div>
        <p class="px-4 py-6 text-gray-600">See and talk to your users and import them into your
            platform.</p>
        <ul class="px-4 pb-4 space-y-4 divide-y">
            <h5 class="font-semibold">Import Users from:</h5>
            <li class="flex items-start justify-between pt-4">
                <div class="flex items-start space-x-3">
                    <!-- Twitter icon -->
                    <span class="flex items-center pt-1">
                        <svg fill="currentColor" class="w-5 h-5 text-blue-500">
                            <path
                                d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </span>
                    <div>
                        <h5 class="font-semibold">Twitter</h5>
                        <span class="text-sm font-medium text-gray-400">Users</span>
                    </div>
                </div>
                <a href="#" class="flex items-center px-2 py-1 space-x-2 text-sm text-white bg-blue-600 rounded-md">
                    <span>Launch</span>
                    <span class="">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                            </path>
                        </svg>
                    </span>
                </a>
            </li>
            <li class="flex items-start justify-between pt-4">
                <div class="flex items-start space-x-3">
                    <!-- Github icon -->
                    <span class="flex items-center pt-1">
                        <svg width="24" height="24" fill="currentColor" class="text-black">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z">
                            </path>
                        </svg>
                    </span>
                    <div>
                        <h5 class="font-semibold">Github</h5>
                        <span class="text-sm font-medium text-gray-400">Users</span>
                    </div>
                </div>
                <a href="#" class="flex items-center px-2 py-1 space-x-2 text-sm text-white bg-blue-600 rounded-md">
                    <span>Launch</span>
                    <span class="">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                            </path>
                        </svg>
                    </span>
                </a>
            </li>
            <li class="pt-4 text-sm font-medium text-gray-400">
                <p>
                    Or you can
                    <a href="#" class="font-normal text-blue-500 hover:underline whitespace-nowrap">sync
                        data
                        to your dashboard</a>
                    to ensure data is always up to date.
                </p>
            </li>
        </ul>
    </div>

    <!-- Monthly chart card -->
    <div class="border rounded-lg shadow-sm xl:col-span-3">
        <!-- Card header -->
        <div class="flex items-center justify-between px-4 py-2 border-b">
            <h5 class="font-semibold">Monthly Expenses</h5>
            <!-- Dots button -->
            <button class="p-2 rounded-full">
                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Card content -->
        <div class="flex items-center p-4 space-x-4">
            <span class="text-3xl font-medium">45%</span>
            <span class="flex items-center px-2 space-x-2 text-sm text-green-800 bg-green-100 rounded">
                <span>
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <span>39.2%</span>
            </span>
        </div>
        <!-- Chart -->
        <div class="relative min-w-0 p-4 h-80">
            <canvas id="updatingMonthlyChart"></canvas>
        </div>
    </div>
</div>

<!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
{{-- <h3 class="mt-6 text-xl">Users</h3>
                    <div class="flex flex-col mt-6">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Title
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Role
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <div>
                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>
                                                </template>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>

                                                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 w-10 h-10">
                                                                <img class="w-10 h-10 rounded-full"
                                                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&amp;u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&amp;v=4"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">Ahmed Kamel
                                                                </div>
                                                                <div class="text-sm text-gray-500">ahmed.kamel@example.com
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">Regional Paradigm Technician
                                                        </div>
                                                        <div class="text-sm text-gray-500">Optimization</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full ">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin
                                                    </td>
                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}
@guest
    <div id="alert-1" class="p-4 mb-2 rounded-lg " role="alert">
        <aside id="revue-embed " class="p-4 my-8 border border-gray-200 rounded-lg shadow-md sm:p-6 lg:p-8 ">

            <div id="alert-1" class="flex flex-col w-full ">

                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300"
                    data-collapse-toggle="alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <h3 class="mb-3 text-xl font-medium text-gray-900 dark:text-white">Get more updates...</h3>
            <p class="mb-5 text-sm font-medium text-gray-500 dark:text-gray-300">Do you want to get notified when a new
                component
                is added to Flowbite? Sign up for our newsletter and you'll be among the first to find out about new
                features,
                components, versions, and tools.</p>
            <form action="" method="post" id="revue-form" name="revue-form">
                <div class="grid-cols-2 gap-10 mx-auto mb-3 sm:grid">
                    <div class="relative w-full mr-3 revue-form-group">
                        <label for="member_email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                            address</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none sm:mt-0 ">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <input
                            class="revue-form-field bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your email address..." type="email" name="member[email]" id="member_email"
                            required="">
                    </div>
                    <div class="flex p-8 revue-form-actions">
                        <input type="submit" value="Subscribe"
                            class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 bottom-0"
                            name="member[subscribe]" id="member_submit">
                    </div>
                </div>
                <div class="text-sm font-medium text-gray-500 revue-form-footer dark:text-gray-300">By subscribing, you
                    agree
                    with Revue’s <a rel="nofollow"
                        href="https://www.freeprivacypolicy.com/live/ea186c83-e337-4c9b-887e-4a9c1b6e9e65"
                        class="text-blue-600 hover:underline dark:text-blue-500" target="_blank">Terms
                        of
                        Service</a> and <a rel="nofollow" target="_blank"
                        class="text-blue-600 hover:underline dark:text-blue-500"
                        href="https://www.freeprivacypolicy.com/live/9f16a154-2a5c-46af-8dd8-08fd6de5343b"
                        target="_blank">Privacy
                        Policy</a>.
                </div>
            </form>
        </aside>
    </div>

@endguest
<div class="w-5/6 border-b-2 border-gray-400 ">

</div>


<footer class="py-12 xl:py-24 ">
    <div class="grid grid-cols-2 gap-8 px-6 py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Company</h2>
            <ul>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">About</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Careers</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Brand
                        Center</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Blog</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Help center</h2>
            <ul>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Discord
                        Server</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Twitter</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Facebook
                    </a>
                </li><a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">
                </a>
                <li class="mb-4"><a href="#" class="hover:underline">
                    </a><a href="{{ url('/Contact') }}"
                        class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Contact
                        Us</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Legal</h2>
            <ul>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Privacy
                        Policy</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Licensing</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Terms
                        &amp;
                        Conditions</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Download</h2>
            <ul>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">iOS</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Android</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">Windows</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-gray-600 hover:underline dark:text-gray-400 hover:text-blue-300">MacOS</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="px-4 py-6 md:flex md:items-center md:justify-between xl:py-24 ">
        <span class="text-sm text-gray-600 dark:text-gray-300 sm:text-center">© 2022 <a
                href="https://wesley.io.ke">Wesley-Sinde™</a>. All
            Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center md:mt-0">
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                    </path>
                </svg>
            </a>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-300">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</footer>

<div id="loading"
    class="bg-gray-800 fixed block w-full h-full p-0 m-0 top-0 left-0 bottom-0 right-0 text-center opacity-100 z-50  flex-col rounded shadow-md">

    <div class=" mx-auto object-center flex flex-col m-8 rounded shadow-md w-60 sm:w-80 animate-pulse h-96">
        <div class="h-48 rounded-t dark:bg-gray-700"></div>
        <div class="flex-1 px-4 py-8 space-y-4 sm:p-8 dark:bg-gray-900">
            <div class="w-full h-6 rounded dark:bg-gray-700"></div>
            <div class="w-full h-6 rounded dark:bg-gray-700"></div>
            <div class="w-3/4 h-6 rounded dark:bg-gray-700"></div>
        </div>
    </div>
    <div class="loader">Loading...</div>
</div>
<script>
    $(window).on('load', function() {
        $('#loading').fadeOut(500);
        //$('#loading').hide();
    })
</script>
<style>
    .loader,
    .loader:after {
        border-radius: 50%;
        width: 10em;
        height: 10em;
    }

    .loader {
        margin: 60px auto;
        font-size: 10px;
        position: relative;
        text-indent: -9999em;
        border-top: 1.1em solid rgba(255, 255, 255, 0.2);
        border-right: 1.1em solid rgba(255, 255, 255, 0.2);
        border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
        border-left: 1.1em solid #ffffff;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation: load8 1.1s infinite linear;
        animation: load8 1.1s infinite linear;
    }

    @-webkit-keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    #loadingDiv {
        position: absolute;
        ;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
    }

</style>
