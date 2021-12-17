@component('mail::message')
# Hurray, a new contact message! 🎉

__Name:__ {{ $name }}<br>
__Subject:__ {{ $subject }}<br>
__Email:__ {{ $email }}<br>
__Phone:__ {{ $phone }}<br>

__Message__<br>
{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent