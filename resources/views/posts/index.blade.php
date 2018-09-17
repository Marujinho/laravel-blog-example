@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @include('layouts.message_session')
            <h3 style="color:#fff;">Últimas Postagens</h3>
            <div class="card">
                <!-- <div class="card-header">Todos seus posts</div> -->
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
                    {!! Form::open(['method' => 'DELETE','route' => ['posts.delete',
                    $post->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}

                    @endif
                    <span style="right: 0; position: absolute; margin: -30px 20px 0px 0px;">Última atualização: <span
                            class="formatUpdate">{{$post->updated_at}}</span></span>

                    <hr>
                    @endforeach

                    <div style="margin-left: 50%; margin-right: 50%">
                        {{$posts->links()}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h3 style="color:#fff;">Utilidades</h3>
            <div class="form-group">
                <div class="card" style="width: 100%;">
                    <div><img class="card-img-top" src="/images/profile.png" alt=""></div>
                    <div class="card-body">
                        <p class="card-text"><a href="#">Quem sou eu ?</a></p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <h3 style="color:#fff;">Melhores Postagens</h3>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <h3 style="color:#fff;">Últimas Postagens</h3>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <h3 style="color:#fff;">Redes Sociais</h3>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <i class="fab fa-instagram" style="font-size:30px;"></i>
                        <i class="fab fa-facebook" style="font-size:30px;"></i>
                        <i class="fab fa-twitter" style="font-size:30px;"></i>
                        <i class="fab fa-whatsapp" style="font-size:30px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
