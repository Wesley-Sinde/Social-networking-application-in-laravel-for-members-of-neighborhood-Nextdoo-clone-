@if (Auth::check())

    @extends('layouts.app')

    @section('content')
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <div class="w-full m-auto text-left">
            <div class="py-2 b">
                <h1
                    class="float-left w-2/3 font-serif text-3xl font-extrabold text-center text-gray-600 uppercase align-middle dark:text-yellow-400 ">
                    Update Post
                </h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="w-4/5 m-auto ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="w-1/5 px-4 py-4 mb-4 bg-red-700 text-gray-50 rounded-2xl">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="w-4/5 pt-5 m-auto text-gray-600 dark:text-gray-400">
            {{-- <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/ --}}
            <form action="{{ url('/blog/' . $post->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="text" name="title" id="title" value="{{ $post->title }}"
                    class="block w-full h-20 text-3xl bg-transparent border-b-2 outline-none ">
                <div class="form-group">
                    <label for="description"></label>
                    <textarea id="description" name="description"
                        class="block w-full py-5 text-xl bg-transparent border-b-2 outline-none h-60">{{ $post->description }}</textarea>
                </div>

                {{-- <div class="items-center pt-5 bg-gray-lighter">
                    <label
                        class="flex flex-col items-center content-center px-2 py-3 tracking-wide uppercase bg-white border rounded-lg shadow-lg cursor-pointer hover:bg-blue-900 hover:font-extrabold hover:text-gray-100 w-44 border-blue">
                        <span class="mt-2 text-base leading-normal">
                            Select a file
                        </span>
                        <input type="file" name="image" class="hidden ">
                    </label>
                </div> --}}

                <div class="form-group align-middle  pb-7">
                    {{-- <button type="submit"
                        class="float-right px-8 py-4 mt-8 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 rounded-3xl hover:bg-blue-900 hover:text-xl">
                        Submit Edit
                    </button> --}}
                    <button type="submit"
                        class="   justify-center  w-40 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-7">
                        <span class="absolute inset-y-0 left-0  pl-3">

                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAABV0lEQVQ4jWNgoBAw4pOctfdhLsP/v/pM/5nWp7gqbCXagDk7Hgv9Yfl9TEpKVJGLl4Pt/dtPX9++/Xwiw1nBBa8BDf//M0nuehD76+/fYm09BV0WFma43Mf3X348e/auI91ZvhGrATPPPOP6++7HBSlpEQVOTjZWTi52DJfdufn0zT/G/+/+/ft7JM1BIRnFgBl7HixRVpWKYmdnxRsuDAwMDC+fv/vy8f3niBQnha2Mc449MPzzjWEJHy+nhIy8mBAhzQwMDAz//v9nuHrp/mMWTuYAxhl7HlzV1JHXImgtGvj/n4Hh+rUHN5nYOViFSdXMwMDAwMjIwMDBwSbA9Pv3n89k6GdgYGBg+PXzz2cWJiaGlts3nrQKifCJMbMwsRKj8e+ff7/fvPn4ipGBoZmRgYGBYf7++xw///13/feXgZ8YA5gZmd4/l/q6u0Fb+xe5rh9OAABdZXvGfAXl0QAAAABJRU5ErkJggg==" />
                        </span>&nbsp;
                        &nbsp;&nbsp;&nbsp;Submit Edit
                    </button>

                </div>
            </form>
        </div>


        <script>
            $(window).on('load', function() {
                $('#ckeditor-textarea').ckeditor();
            });
            CKEDITOR.replace('description', {
                filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form'
            });
        </script>

        <script>
            CKEDITOR.replace('description');
        </script>
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
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
