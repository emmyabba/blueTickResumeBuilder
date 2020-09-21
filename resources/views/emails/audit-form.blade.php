@component('mail::message')
# Audit Form

@php 
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
</small>

Dear Support,

<p>An audit form has been submitted with the following details below.</p>


@component('mail::panel')
# Customer Information
<ul>
	<li>Name: {{ $audit->user->name }}</li>
	<li>Email: {{ $audit->user->email }}</li>
	<li>Mobile No: {{ $audit->user->mobile_number }}</li>
</ul>

# Audit Information
<ul>
	<li>Date of Visit: {{ $audit->date_of_visit }}</li>
	<li>Time of Visit: {{ $audit->time_of_visit }}</li>
	<li>Location: {{ $audit->location }}</li>
	<li>Remark: {{ $audit->details }}</li>
</ul>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
