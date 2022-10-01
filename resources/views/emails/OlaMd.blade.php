@component('mail::message')
# Olá T91 MD

Testando **todo** o texto dessa mensagem

## Título 2

- item 1
- item 2

@component('mail::button', ['url' => 'http://google.com.br'])
Google
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
