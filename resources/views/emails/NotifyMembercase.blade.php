@component('mail::message')
    # Introduction

    The body of your message.
    @component('mail::button', ['url' => $url, 'color' => 'success'])
        View Order
    @endcomponent

    @component('mail::panel')
        This is the panel content.
    @endcomponent
    @component('mail::table')
        | Laravel | Table | Example |
        | ------------- |:-------------:| --------:|
        | Col 2 is | Centered | $10 |
        | Col 3 is | Right-Aligned | $20 |
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
