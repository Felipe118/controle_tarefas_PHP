@component('mail::message')
# Introdução

O corpo da sua mensagem.

@component('mail::button', ['url' => ''])
Texto
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
