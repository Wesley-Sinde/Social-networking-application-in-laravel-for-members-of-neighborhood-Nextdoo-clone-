 @extends('layouts.app')
 @section('content')
     <div class="flex flex-col flex-1 h-full overflow-hidden text-gray-800 dark:text-gray-200">
         @if (session()->has('message'))
             <div id="toast-success"
                 class="flex items-center max-w-xs p-4 mb-1 text-gray-500 bg-white rounded-lg shadow top-5 dark:text-gray-400 dark:bg-gray-800"
                 role="alert">
                 <div
                     class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                     <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd"
                             d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                             clip-rule="evenodd"></path>
                     </svg>
                 </div>
                 <div class="ml-3 text-sm font-normal">
                     {{ session()->get('message') }}
                 </div>
                 <button type="button"
                     class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                     data-collapse-toggle="toast-success" aria-label="Close">
                     <span class="sr-only">Close</span>
                     <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd"
                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                             clip-rule="evenodd">
                         </path>
                     </svg>
                 </button>
             </div>
         @endif
         @if (Cache::has('user-is-online-' . $Userlocatiom->id))
             @php
                 $Online = 'Online';
             @endphp
         @else
             @php
                 $Online = \Carbon\Carbon::parse($Userlocatiom->last_seen)->diffForHumans();
             @endphp
         @endif
         <div class="w-full text-xl px-8 pt-6">
             <userprofile-component :userid=2 online="{{ $Online }}" />
         </div>
         <div class="content-center text-center py-2">
             <h1 class="sticky my-2 mb-3 text-xl font-semibold underline whitespace-nowrap">
                 What Is Your Neighbor Location?
             </h1>

         </div>
         <div class="mx-auto w-full p-8 h-screen br-gray-500" id="map"></div>

         @php
             $lat = $Userlocatiom->latitude;
             $lng = $Userlocatiom->longitude;
         @endphp


     </div>
     <script type="application/javascript">
         var latitude = "<?php echo $lat; ?>";
         var longitude = "<?php echo $lng; ?>"
         document.write(latitude);

         function initMap() {
             var myLatLng = new google.maps.LatLng(
                 latitude,
                 longitude
             )
             const map = new google.maps.Map(document.getElementById("map"), {
                 zoom: 15,
                 center: myLatLng,
             });

             new google.maps.Marker({
                 position: myLatLng,
                 map,
                 title: "Your Neigbor Location!",
             });
         }
         window.initMap; //= initMap;
     </script>
     <script async defer type="application/javascript"
         src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
 @endsection
