@component('mail::message')
# Шановний(а) {{$user->name}}!

Дякуємо що зареєструвались в нашому інтернет-магазині!<br>
Переглянути та змінити Вашу особисту інформацію Ви можете в профілі.<br>

@component('emails.components.button', ['url' => config('app.url').'/profile'])
Перейти в профіль
@endcomponent

Ваша особиста інформація полегшує оформлення замовлень та співпрацю з Вами.

Щиро Ваші,<br>
адміністрація {{config('app.name')}}
@endcomponent
