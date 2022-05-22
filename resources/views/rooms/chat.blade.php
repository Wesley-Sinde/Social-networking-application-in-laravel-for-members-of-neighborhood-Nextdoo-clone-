 <!-- resources/views/chat.blade.php -->
 @extends('layouts.app')
 @section('content')
     <div class="flex">

         @include('layouts.asidenav')
         <section class="bg-white dark:bg-gray-900">

             <div class="flex flex-col flex-1 m-4 overflow-hidden text-gray-800 dark:text-gray-200">
                 <div class="container">
                     <div class="card">
                         <div class="max-w-full px-5 py-4 bg-gray-200 rounded-lg shadow dark:bg-gray-800">
                             <div class="card-header">Chats</div>
                             <div class="card-body">
                                 <chat-messages :messages="messages"></chat-messages>
                             </div>
                             <div class="card-footer">
                                 <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </section>
     @endsection
