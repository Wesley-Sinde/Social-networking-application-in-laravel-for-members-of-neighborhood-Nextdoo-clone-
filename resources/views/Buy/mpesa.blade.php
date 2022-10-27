@extends('layouts.app')
@section('content')
    <div>
        @if (Auth::user())
            @include('layouts.asidenav')
        @endif
        <section class="bg-white dark:bg-gray-900">
            <div class="flex flex-col flex-1 h-full overflow-hidden text-gray-800 dark:text-gray-200">
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
                    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
                    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> --> --}}
                    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
                    <style>
                        .submit-button:disabled {
                            cursor: not-allowed;
                            background-color: #D1D5DB;
                            color: #111827;
                        }

                        .submit-button:disabled:hover {
                            background-color: #9CA3AF;
                        }

                        .credit-card {
                            max-width: 420px;
                            margin-top: 3rem;
                        }

                        @media only screen and (max-width: 420px) {
                            .credit-card .front {
                                font-size: 100%;
                                padding: 0 2rem;
                                bottom: 2rem !important;
                            }

                            .credit-card .front .number {
                                margin-bottom: 0.5rem !important;
                            }
                        }
                    </style>

                    <div class="m-4">
                        <div class="credit-card  shadow-lg mx-auto rounded-xl bg-gray-700" style="max-width: 420px;"
                            x-data="creditCard">
                            <header class="flex flex-col justify-center items-center">
                                <div class="relative" x-show="card === 'front'"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform scale-90"
                                    x-transition:enter-end="opacity-100 transform scale-100">
                                    <img class="w-1/2 h-auto mx-auto my-3" src="{{ url('images/app/mpesa.webp') }}"
                                        alt="m-pesa icon">
                                </div>
                            </header>
                            <form action="{{ route('mpes-pay') }}" method="post">
                                <main class="mt-4 p-4">
                                    <h1 class="text-xl font-semibold  text-center">M-Pesa payment Number</h1>
                                    <div class="">
                                        <div class="my-3">
                                            <input type="text"
                                                class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none text-center"
                                                placeholder="Phone Number" x-model="cardNumber" x-on:keydown="format()"
                                                x-on:keyup="isValid()" maxlength="12" name="phone" />
                                            <input type="hidden" name="id" value="{{ $post->id }}">
                                        </div>
                                    </div>

                                    <div>
                                        <a href="#"
                                            class="mx-auto text-center inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                                            <svg class="mr-2 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="far"
                                                data-icon="question-circle" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z">
                                                </path>
                                            </svg>
                                            Type your phone number in form 07XX XXXX XX
                                        </a>
                                        <br>
                                        <p class="text-gray-900 dark:text-white text-center">
                                            Ammount to be deducted
                                            <span
                                                class="font-bold text-xl">{{ ' ' . ($post->price - $post->discount) . ' ' }}</span>Ksh
                                        </p>
                                    </div>
                                </main>
                                <footer class=" p-4">
                                    <button
                                        class="submit-button px-4 py-3 rounded-full bg-blue-300 text-blue-900 focus:ring focus:outline-none w-full text-xl font-semibold transition-colors"
                                        x-bind:disabled="!isValid" x-on:click="onSubmit()">
                                        Pay now
                                    </button>
                                </footer>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </section>
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("creditCard", () => ({
                init() {
                    console.log('Component mounted');
                },
                format() {
                    if (this.cardNumber.length > 10) {
                        return;
                    }
                    this.cardNumber = this.cardNumber.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
                },
                get isValid() {
                    if (this.cardNumber === '') {
                        return false;
                    }
                    if (this.cardNumber.length < 10) {
                        return false;
                    }
                    return true;
                },
                onSubmit() {
                    alert(`You did it ${this.cardholder}.`);
                },
                cardholder: '',
                cardNumber: '',
                expired: {
                    month: '',
                    year: '',
                },
                securityCode: '',
                card: 'front',
            }));
        });
    </script>
@endsection
