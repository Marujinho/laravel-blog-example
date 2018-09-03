@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	@include('layouts.message_session')
            <div class="card">
                <div class="card-header">Todos seus posts</div>
                <div class="card-body">
                 	@foreach($posts as $post)

                        <div>
                            <a href="{{route('posts.show', $post->id)}}" style="color:black;text-decoration: none">
                     	        <h1>{{$post->title}}</h1>
                            </a>    
                        </div>

                        <div>
                            <a href="{{route('posts.show', $post->id)}}">
                                <img src="images/{{$post->pictureThumb}}" width="100%">
                            </a>
                        </div>

                        <div style="margin-top: 15px">
                     	  <h5>{{$post->content}}</h5>
                        </div>
                        @if(Auth::check())
                         	<a href="{{route('posts.edit', $post->id)}}"><button class="btn btn-sm btn-info">Editar</button></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['posts.delete', $post->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Apagar', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                         	
                        @endif
                        <hr>
                 	@endforeach

                    <div style="margin-left: 50%; margin-right: 50%">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection