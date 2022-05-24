@extends('layouts.master')

@section('titulo', 'Noticias')

@section('contenido')

    <?php
        use \App\Http\Controllers\TemplateController;
        $url = TemplateController::getUrl();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

    ?>

    <div class="mainNotice">
        <div class="mainNoticeIMG" style="background-image: url('<?=$url?>/img/{{ $noticia->imagen}}')">
            <h1>{{$noticia->titulo}}</h1>
        </div>
        <div class="mainNoticeCategorias">
            @if($noticia->estado == 1)
            <span style="background-color: orange !important;">Nuevo</span>
            @endif
            <span >{{$noticia->getCategoria->nombre}}</span>
        </div>
        <p>{{$noticia->descripcion}}</p>


    </div>



    <div class="mainNoticeComentarios">

        @if(empty($_SESSION["login"]))
        <div class="noComentario">Debes estar logeado para poder comentar</div>
        @else
        <form class="formComentario" action="{{$url}}/noticia/addComentario" method="post">
            <input type="hidden" name="idNoticia" value="{{$noticia->id}}">
            <label>Nuevo Comentario: </label>
            <textarea id="comentario" name="comentario" rows="4" cols="50" placeholder="Comentario..."></textarea>
            <button  id="btnComentario" class="btn btn-primary">Comentar</button>
        </form>
        @endif


        <div class="listadoComentarios">

            @foreach($comentarios as $c)
                <div class="comentarioCard">
                    <img src="<?=$url?>/img/noneUser.png">
                    <div class="comentarioCardUser">
                        <h5>{{$c->getUsuario->nombre}}</h5>
                        <p>{{$c->comentario}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
