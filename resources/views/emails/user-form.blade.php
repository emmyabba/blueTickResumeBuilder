@component('mail::message')
# New User Registration

@php
$now = date('Y-m-d H:i:s');
@endphp

<small>
Sent: {{ $now }}<br>
</small>


<p>A new user created an account with the following details below</p>


@component('mail::panel')
# Customer Information
<ul>
	<li>Name: {{ $user->lastname.' '.$user->othernames }}</li>
	<li>Email: {{ $user->email }}</li>
	<li>Mobile No: {{ $user->phone_number }}</li>
</ul>


@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
