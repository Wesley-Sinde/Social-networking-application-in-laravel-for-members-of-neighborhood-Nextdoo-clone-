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
                                        <ol class="breadcrumb flex">
                        <li><a href="/" class=" hover:underline hover:text-yellow-400"><i
                                    class="fa fa-dashboard"></i>Dashboard</a></li>
                        <?php $segments = '';
                        $toEnd = count(Request::segments());
                        ?>
                        @foreach (Request::segments() as $segment)
                            <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <?php $segments .= '/' . $segment;
                            
                            if (0 === --$toEnd) { ?>
                            <li>
                                <a class=" hover:underline hover:text-yellow-400 text-blue-400"
                                    href="{{ $segments }}">{{ $segment }}</a>
                            </li>
                            <?php } else { ?>
                            <li>
                                <a class=" hover:underline hover:text-yellow-400"
                                    href="{{ $segments }}">{{ $segment }}</a>
                            </li>
                            <?php }                            
                            ?>
                        @endforeach
                    </ol>
                                <h3 class="text-2xl font-semibold text-purple-900 dark:text-purple-500">Graphic Design</h3>
                                <p class="mb-6">This Is our services Page.
                                    Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at
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
