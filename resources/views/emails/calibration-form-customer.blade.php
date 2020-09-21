@component('mail::message')
# Calibration Form

Dear {{ Auth::user()->name }},

Your calibration request form has been submitted successfully, a calibration specialist from Chibek will contact you soon.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
