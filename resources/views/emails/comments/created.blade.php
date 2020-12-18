@component('mail::message')
# Comment created

{{ $comment->body }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
