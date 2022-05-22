@if (Auth::check())
    @extends('layouts.app')
    @section('content')
        <div class="w-full px-2 mx-auto max-w-8xl">
            <div class="flex">
                @include('layouts.asidenav')
                <main class="flex-1 max-h-full px-4 overflow-hidden overflow-y-scroll text-center ">


                    <script type="application/javascript" src="https://cdn.jsdelivr.net/gh/virae/we-stand-with-ukraine@v1.0.2/badge.js"
                                        defer></script>
                    <script type="application/javascript">
                        tinymce.init({
                            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                            contextmenu_avoid_overlap: '.mce-spelling-word',
                            image_class_list: [{
                                title: 'img-responsive',
                                value: 'img-responsive'
                            }, ],
                            height: 500,
                            setup: function(editor) {
                                editor.on('init change', function() {
                                    editor.save();
                                });
                            },
                            plugins: 'code table lists image ',
                            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image | toggledark ',



                            skin: (window.matchMedia("(prefers-color-scheme: dark)").matches ? "oxide-dark" : ""),
                            content_css: (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : ""),

                            image_title: true,
                            branding: false,
                            automatic_uploads: true,
                            images_upload_url: '/blogupload',
                            file_picker_types: 'image',
                            file_picker_callback: function(cb, value, meta) {
                                var input = document.createElement('input');
                                input.setAttribute('type', 'file');
                                input.setAttribute('accept', 'image/*');
                                input.onchange = function() {
                                    var file = this.files[0];

                                    var reader = new FileReader();
                                    reader.readAsDataURL(file);
                                    reader.onload = function() {
                                        var id = 'blobid' + (new Date()).getTime();
                                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                                        var base64 = reader.result.split(',')[1];
                                        var blobInfo = blobCache.create(id, file, base64);
                                        blobCache.add(blobInfo);
                                        cb(blobInfo.blobUri(), {
                                            title: file.name
                                        });
                                    };
                                };
                                input.click();
                            }
                        });
                    </script>

                    {{-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> --}}
                    <div class="w-4/5 m-auto text-left">
                        <div class="py-2 b">
                            <h3 class="text-center underline text-2xl font-medium text-yellow-900 dark:text-yellow-500">
                                Create
                                a Blog
                            </h3>
                        </div>
                    </div>

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

                    <div class="w-4/5 pt-1 m-auto z-0">
                        <x-forms.tinymce-editor />
                    </div>
                </main>
            </div>
        </div>

        <script type="application/javascript">
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
            $("#output").change(function() {
                imagePreview(this);
                $(".imagechange").remove();
            });
        </script>







        {{-- <!-- Snippet -->
        <section class="flex flex-col justify-center antialiased bg-gray-900 text-gray-200 min-h-screen">
            <div class="max-w-6xl mx-auto p-4 sm:px-6 h-full">
                <!-- Blog post -->
                <article
                    class="max-w-sm mx-auto md:max-w-none grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center">
                    <a class="relative block group" href="#0">
                        <div class="absolute inset-0 bg-gray-800 hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none"
                            aria-hidden="true"></div>
                        <figure
                            class="relative h-0 pb-[56.25%] md:pb-[75%] lg:pb-[56.25%] overflow-hidden transform md:-translate-y-2 xl:-translate-y-4 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out">
                            <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out"
                                src="https://preview.cruip.com/open-pro/images/blog-post-01.jpg" width="540" height="303"
                                alt="Blog post">
                        </figure>
                    </a>
                    <div>
                        <header>
                            <div class="mb-3">
                                <ul class="flex flex-wrap text-xs font-medium -m-1">
                                    <li class="m-1">
                                        <a class="inline-flex text-center text-gray-100 py-1 px-3 rounded-full bg-purple-600 hover:bg-purple-700 transition duration-150 ease-in-out"
                                            href="#0">Product</a>
                                    </li>
                                    <li class="m-1">
                                        <a class="inline-flex text-center text-gray-100 py-1 px-3 rounded-full bg-blue-500 hover:bg-blue-600 transition duration-150 ease-in-out"
                                            href="#0">Engineering</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="text-2xl lg:text-3xl font-bold leading-tight mb-2">
                                <a class="hover:text-gray-100 transition duration-150 ease-in-out" href="#0">Designing a
                                    functional workflow at home.</a>
                            </h3>
                        </header>
                        <p class="text-lg text-gray-400 flex-grow">Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                        <footer class="flex items-center mt-4">
                            <a href="#0">
                                <img class="rounded-full flex-shrink-0 mr-4"
                                    src="https://preview.cruip.com/open-pro/images/news-author-04.jpg" width="40"
                                    height="40" alt="Author 04">
                            </a>
                            <div>
                                <a class="font-medium text-gray-200 hover:text-gray-100 transition duration-150 ease-in-out"
                                    href="#0">Chris Solerieu</a>
                                <span class="text-gray-700"> - </span>
                                <span class="text-gray-500">Jan 19, 2020</span>
                            </div>
                        </footer>
                    </div>
                </article>
            </div>
        </section>

        <!-- More components -->
        <div x-show="open" class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60"
            x-data="{ open: true }">
            <div class="bg-gray-800 text-gray-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
                <div>👉 <a class="hover:underline ml-1" href="https://cruip.com/?ref=codepen-cruip-blog-post-hover"
                        target="_blank">More components on Cruip.com</a></div>
                <button class="text-gray-500 hover:text-gray-400 ml-5" @click="open = false">
                    <span class="sr-only">Close</span>
                    <svg class="w-4 h-4 flex-shrink-0 fill-current" viewBox="0 0 16 16">
                        <path
                            d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z" />
                    </svg>
                </button>
            </div>
        </div> --}}
    @endsection
@else
    <div class="items-center pt-5 bg-gray-lighter">
        <label
            class="flex flex-col items-center content-center px-2 py-3 tracking-wide uppercase bg-white border rounded-lg shadow-lg cursor-pointer hover:bg-blue-900 hover:font-extrabold hover:text-gray-100 w-44 border-blue">
            <span class="mt-2 text-base leading-normal uppercase">
                You are not allowed to access this page
            </span>
        </label>
    </div>
@endif
