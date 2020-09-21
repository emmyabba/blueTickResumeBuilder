@component('mail::message')
# Calibration Form

@php 
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
</small>

Dear Support,

<p>A calibration form has been submitted with the following details below</p>


@component('mail::panel')
# Customer Information
<ul>
	<li>Name: {{ $calibration->user->name }}</li>
	<li>Email: {{ $calibration->user->email }}</li>
	<li>Mobile No: {{ $calibration->user->mobile_number }}</li>
</ul>

# Equipment Information
<ul>
	<li>Name: {{ $calibration->equipment_name }}</li>
	<li>Manufacturer: {{ $calibration->equipment_manufacturer }}</li>
	<li>Model: {{ $calibration->model }}</li>
	<li>Date of Purchase: {{ $calibration->date_of_purchase }}</li>
	<li>Date of Purchase: {{ $calibration->serial_no }}</li>
	<li>Date of Purchase: {{ $calibration->calibration_cycle }}</li>
	<li>Date of Purchase: {{ $calibration->last_calibration_date }}</li>
	<li>Date of Purchase: {{ $calibration->calibration_due_date }}</li>
	<li>Date of Purchase: {{ $calibration->remark }}</li>
</ul>
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
