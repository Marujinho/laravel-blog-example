@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
		<h3>Todas Publicações</h3>
            @include('layouts.message_session')
            <div class="card">
                <div class="card-header">Publicações</div>
                
				<div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Titúlo </th>
                            <th>Data de criação</th>
                            <th>Última edição</th>
                            <th></th>
                        </tr>
                        <tr>
                            @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td><a href="{{route('posts.show', $post->id)}}">Ir para postagem</a></td>
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
