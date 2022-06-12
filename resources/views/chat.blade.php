 <!-- resources/views/chat.blade.php -->
 @extends('layouts.app')
 @section('content')
     <div class="flex">

         @include('layouts.asidenav')
         <section class="w-full text-gray-800 bg-white dark:bg-gray-900 sm:flex dark:text-gray-200">

             <div class="m-4 overflow-hidden text-gray-800  dark:text-gray-200">
                 <div class="container">
                     <div class="card">
                         <div class="px-1 py-4 bg-gray-200 rounded-lg shadow  sm:px-5 dark:bg-gray-800">
                             <ol class="flex breadcrumb">
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
                                         <a class="text-blue-400  hover:underline hover:text-yellow-400"
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
                             <div class="card-header">Chats</div>
                             <div
                                 class="sticky z-20 w-auto p-8 py-4 mx-4 mb-20 mr-0 space-y-4 overflow-auto scrolling-touch text-sm leading-6 bg-gray-200 rounded shadow-xl overscroll-none h-96 text-slate-700 dark:text-slate-400 sm:text-base sm:leading-7 max-h-96 verflow-y-auto px- dark:bg-gray-800 lg:block pb-14">
                                 <chat-messages :messages="messages"></chat-messages>
                             </div>
                             <div class="sticky ">
                                 <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="px-5 border-l-2 sm:w-2/5">
                 <div class="flex flex-col">
                     <div class="py-4 text-xl font-semibold">Laravel Stack Group</div>
                     <img src="https://source.unsplash.com/L2cxSuKWbpo/600x600" class="object-cover h-64 rounded-xl"
                         alt="" />
                     <div class="py-4 font-semibold">Created 22 Sep 2021</div>
                     <div class="font-light">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                         perspiciatis!
                     </div>
                 </div>
             </div>
         </section>
     @endsection
