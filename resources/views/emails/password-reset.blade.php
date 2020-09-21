@component('mail::message')

Hello!
You are receiving this email because we received a password reset request for your account.

@php $url = 'http://chibek.com/eshop/user-reset-password/'.$token @endphp
@component('mail::button', ['url' => $url])
Reset password
@endcomponent


If you did not request a password reset, no further action is required.

Regards,
Chibek

If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: http://chibek.com/eshop/user-reset-password/{{ $token }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
