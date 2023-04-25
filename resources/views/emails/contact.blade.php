@component('mail::message')
# New Message from ContactUs Form

You have received a new message from a user through your contact form. The details of the message are as follows:

**Name:** {{ $name }}

**Email:** {{ $email }}

**Message:**

{{ $content }}

Thanks!<br>
{{-- {{ config('app.name') }} --}}
@endcomponent
