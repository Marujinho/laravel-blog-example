@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	@include('layouts.message_session')
            <div class="card">
                <div class="card-body">

                    <div>
                 	  <h1>{{$post->title}}</h1>
                    </div>

                    <div>
                        <img src="{{url('/images/').'/'.$post->pictureThumb}}" width="100%" />  
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection