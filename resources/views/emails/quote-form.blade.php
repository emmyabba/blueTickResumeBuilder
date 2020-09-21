@component('mail::message')

@php 
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
Reference: {{ $qoute->reference }}<br>
</small>

<p>Dear sales department, <br>

<p>An enquiry form has been submitted with the below details.</p>


@component('mail::panel')
# Product Enquiry

<ul>
	<li>Product: @if(!$qoute->inventory_id == NULL) {{ $qoute->inventory->name }} @else {{ $qoute->inventory }} @endif</li>
	<li>Category: @if(!$qoute->inventory_id == NULL) {{ $qoute->inventory->subcategory->name }} @endif</li>
	<li>Product Line: @if(!$qoute->inventory_id == NULL) {{ $qoute->inventory->subcategory->category->name }} @endif</li>
</ul>
<hr>

# Contact Information

<ul>
	<li>Name: {{ $qoute->name }}</li>
	<li>Organization: {{ $qoute->company }}</li>
	<li>Address: {{ $qoute->address }}</li>
	<li>City, State: {{ $qoute->state }}</li>
	<li>Country / Region: {{ $qoute->country }}</li>
	<li>Phone: {{ $qoute->mobile_number }}</li>
	<li>Email: {{ $qoute->email }}</li>
	<li>Additional comment: {{ $qoute->comment }}</li>
</ul>

@if($inventory != 'null')
@php 
	$url = 'http://chibek.com/eshop/inventory/'.$inventory->slug;
@endphp

@component('mail::button', ['url' => $url])
	View Inventory
@endcomponent
@endif


@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
