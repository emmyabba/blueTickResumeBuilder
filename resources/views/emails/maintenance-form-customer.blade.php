@component('mail::message')
# Maintenance Form

Dear {{ Auth::user()->name }},

Your maintenance request form has been submitted successfully, a maintenance specialist from Chibek will contact you soon.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
