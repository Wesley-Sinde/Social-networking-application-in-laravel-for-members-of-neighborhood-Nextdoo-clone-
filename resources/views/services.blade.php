@extends('layouts.app')
@section('content')
    <div class="flex">
        @if (isset(Auth::User()->id))
            @include('layouts.asidenav')
        @endif
        <section class=" bg-white dark:bg-gray-900 mx-3 px-3 w-full">

            <!-- component -->
            <div class="py-16 w-full bg-gray-200 shadow dark:bg-gray-800 rounded-xl  ">
                <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
                    <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-1">
                        <div class=" rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                            <div class="mb-12 space-y-4">
                                <h3 class="text-2xl font-semibold text-purple-900 dark:text-purple-500">Graphic Design</h3>
                                <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at
                                    cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi
                                    officiis.</p>
                                <a href="#" class="block font-medium text-purple-600">Know more</a>
                            </div>
                            <img src="https://tailus.io/sources/blocks/end-image/preview/images/graphic.svg"
                                class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                        </div>
                        <div class=" rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                            <div class="mb-12 space-y-4">
                                <h3 class="text-2xl font-semibold text-purple-900 dark:text-purple-500">UI Design</h3>
                                <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at
                                    cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi
                                    officiis.</p>
                                <a href="#" class="block font-medium text-purple-600">Know more</a>
                            </div>
                            <img src="https://tailus.io/sources/blocks/end-image/preview/images/ui-design.svg"
                                class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
                        </div>
                        <div class=" rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                            <div class="mb-12 space-y-4">
                                <h3 class="dark:text-purple-500 text-2xl font-semibold text-purple-900">UX Design</h3>
                                <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at
                                    cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi
                                    officiis.</p>
                                <a href="#" class="block font-medium text-purple-600">Know more</a>
                            </div>
                            <img src="https://tailus.io/sources/blocks/end-image/preview/images/ux-design.svg"
                                class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
