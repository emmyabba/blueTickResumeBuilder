@component('mail::message')
# Calibration Form

Dear {{ $user->lastname }},

Your account was created successfully.

Thank you for choosing Bluetick<br>
{{ config('app.name') }}
@endcomponent
