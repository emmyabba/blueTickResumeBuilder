@component('mail::message')
# Audit Form

Dear {{ Auth::user()->name }},

Your audit form has been submitted successfully, a audit specialist from Chibek will contact you soon.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
