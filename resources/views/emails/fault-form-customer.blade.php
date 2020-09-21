@component('mail::message')
# Fault Form

Dear {{ Auth::user()->name }},

Your fault report form has been submitted successfully, a specialist from Chibek will contact you soon.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
