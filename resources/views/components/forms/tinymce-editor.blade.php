{{-- <div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div> --}}



<form action="{{ url('/blog') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-6 ">
        <label class="block mx-4 mb-2 text-lg font-medium text-gray-900 dark:text-gray-300" for="default_size">
            Thumbnail <span class=" mx-1 text-red-700 text-2xl">✺</span></label>
        <input class=" border rounded-lg" type="file" accept="image/*" onchange="loadFile(event)" name="image">
    </div>
    <img id="output" class="w-36 h-36 mx-auto self-center" />

    <div class="mb-6 ">
        <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-gray-300" for="title">Title Of your Blog
            <span class=" mx-1 text-red-700 text-2xl">✺</span>
        </label>
        <input type="text" id="title" name="title"
            class=" px-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-6">
    </div>

    <div class="form-group">
        {{-- <label for="description">Blog In Details</label> --}}
        <label class="block mt-2 mb-1 text-sm font-medium text-gray-900 dark:text-gray-300" for="default_size">
            Blog In
            Details<span class=" mx-1 text-red-700 text-2xl">✺</span>
        </label>
        <textarea id="myeditorinstance" class="block w-full py-5 text-xl bg-transparent border-b-2 outline-none h-60" name="description">
    <h2 style="text-align: center;">👽<br />THE EVE OF THE WAR</h2>
</textarea>
        {{-- <textarea id="description" placeholder="Description..." name="description"
                        class="block w-full py-5 text-xl bg-transparent border-b-2 outline-none h-60"></textarea> --}}
    </div>
    <div class="items-center p-5 bg-gray-lighter">
        <button type="submit"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-yellow-600 dark:hover:text-white dark:hover:bg-blue-700">Submit
            <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                    clip-rule="evenodd">
                </path>
            </svg>
        </button>
    </div>


</form>
