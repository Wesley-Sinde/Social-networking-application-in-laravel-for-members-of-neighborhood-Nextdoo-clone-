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
                                Edit your
                                Blog
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

                    <div class="mx-2 pt-1 m-auto z-0">
                        <x-forms.tinymce-blog-edit :post="$post" />
                    </div>
                </main>
            </div>
        </div>
    @endsection
@else
    <div class=" items-center pt-5 bg-gray-lighter">
        <label
            class="flex flex-col items-center content-center px-2 py-3 tracking-wide uppercase bg-white border rounded-lg shadow-lg cursor-pointer hover:bg-blue-900 hover:font-extrabold hover:text-gray-100 w-44 border-blue">
            <span class="mt-2 text-base leading-normal uppercase">
                You are not allowed to access this page
            </span>
        </label>
    </div>
@endif
