@component('mail::message')
Bonjour <h4>{{$data['subject']}}</h4>

Vous avez recus un mail de la part de {{$data['name']}} <strong>{{$data['email']}}</strong>

Message :
 <p>{{$data['message']}}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
