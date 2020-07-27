@component('mail::message')
# {{ $details['title'] }}

The body of your message.

@component('mail::button', ['url' => $details['url']])
Ir al sitio web
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
