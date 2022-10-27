@extends('layouts.app')
@section('content')
    <div>
        @if (Auth::user())
            @include('layouts.asidenav')
        @endif

        <section class="bg-white dark:bg-gray-900">
            {{-- <div class="fixed inset-0 z-10 bg-gray-900/50 dark:bg-gray-900/60 " id="sidebar1" aria-label="Sidebar1">
            </div> --}}
            <div class="flex flex-col flex-1 h-full overflow-hidden text-gray-800 dark:text-gray-200">
                {{-- <button style="hover:transform: rotate(45deg);"
                    class="fixed z-40 bg-transparent right-5 top-1/2 hover:bg-gray-500 hover:rounded-full hover:-rotate-90 hover:scale-125 focus:scale-125"
                    type="button" data-modal-toggle="createpost-modal">
                    <img class="" src="\images\app\create.png" alt="create.png">
                </button> --}}

                <!-- Main content -->
                <main class="flex-1 max-h-full p-2 mb-4">
                    <!-- Main content header -->
                    <ol class="flex breadcrumb">
                        <li>
                            <svg class="w-4 h-4 mx-1 animate-ping fill-sky-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </li>
                        <li>
                            <a href="/" class=" hover:underline hover:text-yellow-400">
                                Dashboard</a>
                        </li>
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
                                <a class="text-blue-400 hover:underline hover:text-yellow-400"
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
                    <!-- Start Content -->
                    <!-- component -->
                    @if ($errors->any())
                        <div class="w-4/5 m-auto ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="w-4/5 py-4 mb-4 bg-red-700 text-gray-50 rounded-2xl">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- {!! html_entity_decode($socialShare) !!}
                    --
                    <div>
                        
                    {{ $socialShare }}  
                    {!! $socialShare !!}
                    </div>
                    -- -- {-- {{ $socialShare }} --}}

                    @if (session()->has('message'))
                        <div id="toast-success"
                            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
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
                            <div class="ml-3 text-sm font-normal"> {{ session()->get('message') }}</div>
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


                    <div
                        class="relative mx-auto mt-4 -my-px bg-white rounded-sm shadow-lg md:h-screen md:overflow-auto dark:bg-slate-800 ring-1 ring-slate-900/5">
                        <div class="relative md:flex md:flex-row">
                            <div class="w-full md:h-screen md:overflow-auto md:scroll-m-0 ">

                                <div class="content-center text-center">
                                    <h1 class="sticky my-2 mb-3 text-xl font-semibold underline whitespace-nowrap">
                                        Our Newly Posted Documents?
                                    </h1>

                                </div>
                                @isset($Books)
                                    <div class=" mx-2 grid grid-cols-3 gap-4">
                                        @foreach ($Books as $post)
                                            <div
                                                class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:outline-1 hover:dark:bg-gray-700">
                                                <a href="{{ url('/home/' . $post->id) }}">
                                                    <img class="p-8 rounded-t-lg"
                                                        src="{{ asset('images/' . $post->image_path) }}"
                                                        alt="{{ $post->image_path }}" style="height: 236px;" height="236">
                                                </a>
                                                <div class="px-5 pb-5">
                                                    <a href="{{ url('/home/' . $post->id) }}">
                                                        <h5
                                                            class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                            {{ $post->title }}
                                                        </h5>
                                                    </a>
                                                    <div class="flex items-center mt-2.5 mb-5">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <title>First star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <span
                                                            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <div>
                                                            <div class=" justify-between items-center">
                                                                @if ($post->price == 0)
                                                                    <span
                                                                        class="text-3xl font-bold text-gray-900 dark:text-white">
                                                                        Free
                                                                    </span>
                                                                @else
                                                                    @if ($post->discount > 0)
                                                                        <span>
                                                                            <span
                                                                                class="font-bold text-gray-900 dark:text-white">
                                                                                Now Ksh
                                                                                <span
                                                                                    class="text-xl"></span>{{ ' ' . ($post->price - $post->discount) }}
                                                                            </span>
                                                                            <span class=" pl-3  font-bold text-gray-500">
                                                                                <span class="line-through ">Was: Ksh </span>
                                                                                <span
                                                                                    class="p-1 text-xl">{{ $post->price }}</span>
                                                                            </span>
                                                                        </span>
                                                                    @else
                                                                        <span class="font-bold text-gray-900 dark:text-white">
                                                                            Ksh
                                                                            <span
                                                                                class="text-xl"></span>{{ ' ' . $post->price }}
                                                                        </span>
                                                                    @endif
                                                                @endif
                                                                {{-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span> --}}
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <div class=" pt-10 align-baseline right-3 bottom-3">
                                                                        @if ($post->price == 0)
                                                                            <a class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  right-3 bottom-3"
                                                                                href="images/{{ $post->image_path }}"
                                                                                download="{{ $post->image_path }}">
                                                                                Download
                                                                            </a>
                                                                        @else
                                                                            <a href="{{ url('/pay/' . $post->id) }}"
                                                                                class="  mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  right-3 bottom-3">
                                                                                Buy
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                {{-- <div class="p-4 w-14 h-14 absolute right-0 bottom-0 flex items-center justify-center bg-purple-500 shadow-lg rounded-lg">09</div> --}}
                                                            </div>
                                                        </div>
                                                        {{-- <span class="text-3xl font-bold text-gray-900 dark:text-white">$599
                                                        </span>
                                                        <a href="#"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Add to cart
                                                        </a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <span
                                        class="max-w-full px-5 py-4 text-gray-900 bg-gray-200 rounded-lg shadow dark:text-white dark:bg-gray-800">
                                        <a href="">
                                            <span class="p-6 text-3xl italic font-bold text-yellow-400 dark:text-yellow-400">
                                                No Post Available at the moment check back Later
                                            </span>
                                        </a>,
                                    </span>
                                @endisset

                            </div>
                            <div
                                class="top-0 items-center px-1 py-3 m-2 text-sm font-semibold bg-gray-200 rounded-sm md:sticky text-slate-900 dark:text-slate-200 dark:bg-slate-900 backdrop-blur-sm ring-1 ring-slate-900/10 dark:ring-black/10 md:overflow-hidden">
                                <div class="flex">

                                    <h2 class="px-4 py-2 text-xl font-semibold text-red-600 hover:underline">
                                        Most Viewed
                                    </h2>
                                    <img class="w-8 h-8 m-2 rounded-full animate-pulse" src="\images\app\critical.png"
                                        alt="critical.png">
                                    <div class="flex-1 p-4">
                                        <a href="#">
                                            <h2 class="w-48 px-2 ml-2 font-bold text-blue-400">View All</h2>
                                        </a>
                                    </div>

                                </div>
                                <hr class="border-gray-600">

                                <!--first post-->
                                <div class=" md:overflow-auto">
                                    <mostViewed-component />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 m-2 rounded-sm bg-slate-600 ">
                        <?php echo $Books->render(); ?>
                    </div>
                </main>
            </div>
        </section>


    </div>


    <script type="application/javascript">
        var loadFile = function(event) {
            var element = document.getElementById("output");
            element.classList.add("mx-auto");
            element.classList.add("w-auto");
            element.classList.add("h-36");
            element.classList.add("border");
            element.classList.add("m-3");
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
            // output.classList.add("mx-auto w-2xl h-36 border");
        };
        $("#output").change(function() {
            imagePreview(this);
            $(".imagechange").remove();
        });
    </script>
@endsection











<!-- checkout -->

{{-- <div class="w-full h-full bg-black dark:bg-gray-900 bg-opacity-90 top-0 overflow-y-auto overflow-x-hidden fixed sticky-0"
    id="chec-div">
    <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700"
        id="checkout">
        <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">
            <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-hidden overflow-x-hidden lg:h-screen h-auto"
                id="scroll">
              
                <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">Bag</p>
               
            </div>
            <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">
                <div
                    class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">
                    <div>
                        <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">Summary</p>
                        <div class="flex items-center justify-between pt-16">
                            <p class="text-base leading-none text-gray-800 dark:text-white">Subtotal</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white">,000</p>
                        </div>
                        <div class="flex items-center justify-between pt-5">
                            <p class="text-base leading-none text-gray-800 dark:text-white">Shipping</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white"></p>
                        </div>
                        <div class="flex items-center justify-between pt-5">
                            <p class="text-base leading-none text-gray-800 dark:text-white">Tax</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white"></p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                            <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                            <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">,240
                            </p>
                        </div>
                        <button onclick="checkoutHandler1(true)"
                            class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
