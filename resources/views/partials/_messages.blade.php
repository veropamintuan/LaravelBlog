@if (Session::has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{Session::get('success')}}
	</div>	
@endif

<!--This part is for showing errors. You should first remove all validations inside post controller-->
<!--
@if (count($errors) > 0)
	<div class="alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>

@endif
-->