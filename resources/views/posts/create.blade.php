@extends('layouts.app')


@section('head')


<script type="text/javascript">

/*CHAME AQUI A FUNÇÃO QUE VAI INICIAR O SUMMERNOTE*/
	
</script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">CRIAR NOVO POST</div>
                <div class="card-body">
                 	<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" >
                 		@csrf
					 	<div class="form-group">
						    <label for="title">Título</label>
						    <input type="text" class="form-control" name="title" id="title" placeholder="Insira o título do artigo aqui...">
						</div>
						<div class="form-group">
						    <label for="pictureThumb">Enviar foto</label>
						    <input type="file" class="form-control-file btn" id="pictureThumb" aria-describedby="pictureThumb" name="pictureThumb">	
						    <small id="pictureThumb" class="form-text text-muted">Insira uma imagem que nao seja muito pequena senão vai ficar mor feio</small>
					    </div>
						<div class="form-group">
						    <label for="content">Conteúdo</label>
						    <!--TEM QUE COLOCAR O SUMMERNOTE OU QQL BIBLIOTECA QUE FAÇA O MESMO AQUI-->

						    <!--para testar, basta apagar a textarea a baixo do comentário e colocar o 'name' 
						    	da nova textarea como 'content' que o formulario vai ser enviado corretamente--> 

						  	<!--FIM DA SUMMERNOTE-->
						    <textarea class="form-control" id="content" name="content" rows="8"></textarea>
					    </div>
					    <button type="submit" class="btn btn-primary">Criar Post</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection