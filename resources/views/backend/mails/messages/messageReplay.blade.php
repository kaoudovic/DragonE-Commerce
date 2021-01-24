@component('mail::message')
Dear {{$message->username}}, <br>
4Tech so pleased to contact with you, <br>
we recieved your message and we see, <br>
{{$response}}

@component('mail::button', ['url' => "{{env('APP_URL')}}"])
Our Website
@endcomponent

Thanks,<br>
{{ env('APP_NAME') }}
@endcomponent
