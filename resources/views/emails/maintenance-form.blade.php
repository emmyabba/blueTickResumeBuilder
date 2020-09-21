@component('mail::message')
# Maintenance Form

@php 
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
</small>

Dear Support,

<p>A repairs form has been submitted with the following details below.</p>


@component('mail::panel')
# Customer Information
<ul>
	<li>Name: {{ $repairs->user->name }}</li>
	<li>Email: {{ $repairs->user->email }}</li>
	<li>Mobile No: {{ $repairs->user->mobile_number }}</li>
</ul>

# Equipment Information
<ul>
	<li>Name: {{ $repairs->equipment_name }}</li>
	<li>Model: {{ $repairs->model }}</li>
	<li>Serial No: {{ $repairs->serial_no }}</li>
	<li>Fault: {{ $repairs->date_of_supply }}</li>
	<li>Date of Reported: {{ $repairs->date_of_installation }}</li>
	<li>Routine Maintenance: @if($repairs->routine_maintenance) Yes @else No @endif</li>
	<li>Remark: {{ $repairs->details }}</li>
</ul>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
