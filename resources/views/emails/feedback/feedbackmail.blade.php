@component('mail::message')
Номер відгуку: #{{$feedback->id}}<br>
Від: <b> {{$feedback->name}} </b><br>
Тема: <b> {{$feedback->theme}} </b><br>
Адреса: <b> {{$feedback->email}} </b><br>
<br><br>Текст відгуку:<br>
@component('mail::panel')
{{$feedback->text}}
@endcomponent
@endcomponent
