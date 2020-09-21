@component('mail::message')
# Installation Form

Dear {{ Auth::user()->name }},

Your installation request form has been submitted successfully, an installation specialist from Chibek will contact you soon.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
