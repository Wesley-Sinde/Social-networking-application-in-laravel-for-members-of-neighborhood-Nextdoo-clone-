 <div id="createpost-modal" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
     <div class="relative w-full h-full max-w-md p-4 ">

         <div class="relative bg-gray-400 rounded-lg shadow dark:bg-gray-700 ">
             <button type="button"
                 class="absolute top-3 right-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                 data-modal-toggle="createpost-modal">
                 <svg class="w-5 h-5" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                         d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                         clip-rule="evenodd"></path>
                 </svg>
             </button>
             <div class="px-6 py-6 lg:px-8">
                 <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                     What do you want your members to download?
                 </h3>
                 <form action="{{ url('/home') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                         for="default_size">Upload Thumbnail</label>
                     <input class="pb-3" type="file" accept="image/*" onchange="loadFile(event)" name="image">
                     <img id="output" class="" />

                     <div class="mb-6">
                         <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                             for="title">Title Of your Post
                         </label>
                         <input type="text" id="title" name="title"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     </div>

                     <div class="mb-6">
                         <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                             for="title">Level Of your Post
                         </label>
                         <select id="large" name="level"
                             class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                             <option value='1' class="bg-green-400 " selected>Low</option>
                             <option value='2' class="bg-blue-400 " value="US">Guarded</option>
                             <option value='3' class="bg-yellow-300 " value="CA">Elevated</option>
                             <option value='4' class="bg-orange-400 " value="FR">High</option>
                             <option value='5' class="bg-red-400 " value="DE">Severe</option>
                         </select>
                     </div>
                     <label class="block mt-2 mb-1 text-sm font-medium text-gray-900 dark:text-gray-300"
                         for="default_size">Description</label>
                     <div class="description">
                         <textarea id="description" placeholder="Description..." name="description"
                             class="block w-full py-2 text-xl text-gray-600 border-b-2 outline-none h-60 bg-slate-400 dark:bg-slate-600 dark:text-gray-200 ">
                                        </textarea>
                     </div>

                     <div class="flex items-start mt-2 mb-6">
                         <div class="flex items-center h-5">
                             <input id="remember" type="checkbox" value=""
                                 class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 required">
                         </div>
                         <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                             I agree with
                             the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">
                                 terms
                                 and conditions
                             </a>.
                         </label>
                     </div>
                     <div class="items-center ">
                         <button type="submit"
                             class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                             Submit
                         </button>

                     </div>

                 </form>
             </div>
         </div>
     </div>
 </div>
