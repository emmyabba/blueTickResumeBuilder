@component('mail::message')

@php 
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
Reference: {{ $order->ref_no }}<br>
</small>

<p>Dear {{ $order->user->name }}, <br>

<p>Payment with debit card, an order has been made with the following details.</p>


@component('mail::panel')
Total Payment: &#8358;{{ $order->total }}<br>
# Product Ordered

@component('mail::table')
    | Order reference | Product    | Price    | Quantity    | Order date |
    | --------------- | :---------:| :-------:| :---------: | :--------: |
    @foreach($order->orderItems as $orderItem)
    | {{ $order->ref_no }} | {{ $orderItem->name}} | &#8358;{{ number_format($orderItem->pivot->total, 2) }} | {{ $orderItem->pivot->qty }} | {{ $order->updated_at->toFormattedDateString() }} |
    @endforeach
@endcomponent
<hr>

# Contact Information

<ul>
	<li>Name: {{ $order->address->recipient_name }}</li>
	<li>Organization: {{ $order->address->company }}</li>
	<li>Address: {{ $order->address->address }}</li>
	<li>City, State: {{ $order->address->city }}, {{ $order->address->state }}</li>
	<li>Country / Region: {{ $order->address->country }}</li>
	<li>Phone: {{ $order->address->mobile_number }}</li>
</ul>

@endcomponent
@php 
	$url = 'http://chibek.com/eshop/order-history/'.$order->ref_no;
@endphp
@component('mail::button', ['url' => $url])
	View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
