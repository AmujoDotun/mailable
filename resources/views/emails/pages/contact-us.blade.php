@component('mail::message')

#Thank you for your message

<b>Name</b>{{$data['name']}}
<b>Email</b>{{$data['email']}}

<b>Message</b>

{{$data['message']}}

@endcomponent
