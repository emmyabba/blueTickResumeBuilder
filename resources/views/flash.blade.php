@if ($message = Session::get('success'))
<div class="alert alert-success" style="text-align: center;">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <strong><h3>{{ $message }}</h3></strong>
</div>
@endif
