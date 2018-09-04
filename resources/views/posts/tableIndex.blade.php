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
                 			<th>Post</th>
                 			<th>Data de criação</th>	                 				
                 		</tr>
                 		<tr>
                 			@foreach($posts as $post)
	                 			<tr>                 				
	                 				<td><a href="{{route('posts.show', $post->id)}}"> {{$post->title}}</td></a>
	                 				<td>{{$post->created_at}}</td>
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