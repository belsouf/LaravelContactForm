@component('mail::message')
# Bonjour,
Vous avez reçu un message de la part de: {{ $email }},
<br>
<b>Message: </b>{{ $description }}

@component('mail::button', ['url' => 'mailto:'.$email])
Répondre
@endcomponent

<br><br>
Envoyé par: {{ config('app.name') }},
@endcomponent
