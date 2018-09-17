<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Só colocar a biblioteca junto dessas, copiar a sintaxe a baixo e modificar o nome de acordo com o seu arquivo -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/summernote.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#fff; height: 85px; position:fixed; width:100%; z-index:999;">
            <div class="container">
                <a class="navbar-brand" href="{{ route('posts.index') }}">
                    <img src="/images/partilhemkt.jpg" alt="" style="position: absolute; height: 90px; width: 100px !important; top: -20px;">
                </a>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" style="margin:120px;">
                    @if(Auth::check())
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href='' class="dropdown-toggle btn btn-default " data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Posts</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('posts.create') }}">Criar novo post</a></li>
                                <li><a class="dropdown-item" href="{{route('posts.tableIndex')}}">Ver todos posts</a></li>
                                <li><a class="dropdown-item" href="{{route('emails.index')}}">Ver Emails Cadastrados</a></li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="right:0;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form method="post" action="{{ route('emails.store') }}">
                                @csrf
                                <div class="input-group mb-2">
                                    <label for="inscrever" style="top: 5px; font-size: 15px; position: inherit; margin: 0px 10px 0px 0px;">Receba
                                        minhas postagens: </label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                                    <div class="input-group-append">
                                        <input type="submit" name="enviar" class="btn btn-outline-secondary">
                                    </div>
                                </div>
                            </form>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <article style="position:fixed;">
                <div>
                    <img src="/images/img1.jpg" alt="">
                </div>
            </article>
            <br>
            <br>
            <br>
            <br>
            @yield('content')
        </main>
    </div>
</body>

</html>
