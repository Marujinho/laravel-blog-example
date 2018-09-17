@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if(Session::has('success'))
	<div class="alert alert-success">
		{{ Session::get('success') }}
	</div>
@endif

