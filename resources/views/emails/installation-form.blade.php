@component('mail::message')
# Installation Form

@php 
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
</small>

Dear Support,

<p>An installation form has been submitted with the following details below</p>


@component('mail::panel')
# Customer Information
<ul>
	<li>Name: {{ $installation->user->name }}</li>
	<li>Email: {{ $installation->user->email }}</li>
	<li>Mobile No: {{ $installation->user->mobile_number }}</li>
	<li>Company: {{ $installation->company }}</li>
</ul>

# Equipment Information
<ul>
	<li>Name: {{ $installation->equipment_name }}</li>
	<li>Manufacturer: {{ $installation->equipment_manufacturer }}</li>
	<li>Model: {{ $installation->model }}</li>
	<li>Date of Purchase: {{ $installation->date_of_purchase }}</li>
	<li>Serial No.: {{ $installation->serial_no }}</li>
	<li>Warranty: {{ $installation->warranty }}</li>
	<li>Location: {{ $installation->location }}</li>
	<li>Details: {{ $installation->details }}</li>
</ul>
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
