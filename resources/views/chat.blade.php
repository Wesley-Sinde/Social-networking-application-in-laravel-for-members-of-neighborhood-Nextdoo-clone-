 <!-- resources/views/chat.blade.php -->
 @extends('layouts.app')
 @section('content')
     <div class="flex">

         @include('layouts.asidenav')
         <section class="bg-white dark:bg-gray-900 w-full sm:flex text-gray-800 dark:text-gray-200">

             <div class=" m-4 overflow-hidden text-gray-800 dark:text-gray-200">
                 <div class="container">
                     <div class="card">
                         <div class=" px-1 sm:px-5 py-4 bg-gray-200 rounded-lg shadow dark:bg-gray-800">
                             <div class="card-header">Chats</div>
                             <div
                                 class="mx-4 overscroll-none overflow-auto h-96  shadow-xl p-8 space-y-4 text-slate-700 dark:text-slate-400 text-sm sm:text-base leading-6 sm:leading-7
                                 
                                 max-h-96 
                                 
                                 z-20   py-4 verflow-y-auto scrolling-touch bg-gray-200 rounded  px- dark:bg-gray-800  lg:block sticky  mr-0 w-auto pb-14 mb-20">
                                 <chat-messages :messages="messages"></chat-messages>
                             </div>
                             <div class=" sticky">
                                 <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="sm:w-2/5 border-l-2 px-5">
                 <div class="flex flex-col">
                     <div class="font-semibold text-xl py-4">Laravel Stack Group</div>
                     <img src="https://source.unsplash.com/L2cxSuKWbpo/600x600" class="object-cover rounded-xl h-64"
                         alt="" />
                     <div class="font-semibold py-4">Created 22 Sep 2021</div>
                     <div class="font-light">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                         perspiciatis!
                     </div>
                 </div>
             </div>
         </section>
     @endsection
