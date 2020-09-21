@component('mail::message')
# Fault Form

@php 
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
</small>

Dear Support,

<p>A fault form has been submitted with the following details below</p>


@component('mail::panel')
# Customer Information
<ul>
	<li>Name: {{ $report->user->name }}</li>
	<li>Email: {{ $report->user->email }}</li>
	<li>Mobile No: {{ $report->user->mobile_number }}</li>
	<li>Company: {{ $report->company }}</li>
</ul>

# Equipment Information
<ul>
	<li>Name: {{ $report->equipment_name }}</li>
	<li>Manufacturer: {{ $report->equipment_manufacturer }}</li>
	<li>Brand: {{ $report->brand }}</li>
	<li>Model: {{ $report->equipment_model }}</li>
	<li>Distributor: {{ $report->distributor_name }}</li>
	<li>report No: {{ $report->fault_number }}</li>
	<li>Date of Supply: {{ $report->date_of_supply }}</li>
	<li>Remarks: {{ $report->details }}</li>
</ul>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
