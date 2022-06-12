   <div class="relative z-0 w-full mb-6 group">
       <div class="relative">
           <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
               <svg class="w-5 h-5 text-gray-500  dark:text-gray-400" fill="none" stroke="currentColor"
                   viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                   </path>
               </svg>
           </div>
           <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
               class=" block w-full pl-10 p-2.5  dark:text-white  focus:ring-0 dark:focus:border-blue-500 peer appearance-none focus:outline-none border-gray-300 border-b-2 border-0 bg-transparent text-gray-900 py-2.5 px-0  text-sm dark:border-gray-600 focus:border-blue-600"
               placeholder="+2547 *** *****" required="123-456-7890">
       </div>
       <label for="floating_phone"
           class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
           Phone number (123-456-7890)
       </label>
   </div>
