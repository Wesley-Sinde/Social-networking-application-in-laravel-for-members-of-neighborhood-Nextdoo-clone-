<!DOCTYPE html>
<html>

<head>
    <title>My Digital Neighbor</title>
</head>

<body>

    @component('mail::message')
        # My Neighbor Updates

        ## {{ $postdata->title }}
        <?php
        $url = url('/home/') . '/' . $postdata->id;
        $urlProfile = url('/profiles') . '/' . Auth::User()->id;
        ?>

        ## {{ Auth::User()->name }} has posted a critical post on our neighor. Check it out here..
        {{-- @component('mail::panel')
            {{ Auth::User()->name }} has posted a critical post on our neighor. Check it out here..

            @component('mail::button', ['url' => $url, 'color' => 'success'])
                Want To see it
            @endcomponent

        @endcomponent --}}

        {{-- @component('mail::panel')
            {{ $postdata->title }}
        @endcomponent --}}
        This is the uploaded image
        {{-- ![Some option text][logo] --}}

        [logo]: {{ asset('images/' . $postdata->image_path) }} "Logo"
        {{-- <img src="{{ asset('images/' . $postdata->image_path) }}"> --}}

        <span style="display: inline;">

            @component('mail::button', ['url' => $url, 'color' => 'green'])
                View post
            @endcomponent
            @component('mail::button', ['url' => $urlProfile])
                {{ Auth::User()->name }} profile
            @endcomponent

        </span>
        {{-- @component('mail::button', ['url' => $urlProfile, 'color' => 'success'])
            {{ Auth::User()->name }}
        @endcomponent
        Profile --}}


        <br>
        Thanks,<br>
        {{ config('app.name') }}





    @endcomponent

</body>

</html>
