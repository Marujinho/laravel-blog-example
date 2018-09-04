@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	@include('layouts.message_session')
            <div class="card">
                <div class="card-header">Todos seus posts</div>
                <div class="card-body">
                 	<table class="table">
                 		<tr>
                 			<th>Email</th>
                 			<th>Data de envio</th>	                 				
                 		</tr>
                 		<tr>
                 			@foreach($emails as $email)
	                 			<tr>                 				
	                 				<td>{{$email->email}}</td>
	                 				<td>{{$email->created_at}}</td>
	                 			</tr>
                 			@endforeach
                 		</tr>
                 		
                 	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection