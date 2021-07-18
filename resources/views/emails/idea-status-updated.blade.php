@component('mail::message')
# Le Status de l'idée a été mis a jour

L'idée : {{ $idea->title }}
a été mis a jour ({{$idea->status->name}})

@component('mail::button', ['url' => route('idea.show',$idea) ])
Voir l'idée
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
