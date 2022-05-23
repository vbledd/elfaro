@extends('layouts.master')

@section('titulo', 'Noticias')

@section('contenido')

    <?php
        use \App\Http\Controllers\TemplateController;
        $url = TemplateController::getUrl();
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
        <form class="formComentario">
            <label>Nuevo Comentario: </label>
            <textarea id="comentario" name="comentario" rows="4" cols="50" placeholder="Comentario...">
            </textarea>
            <button type="button" id="btnComentario" class="btn btn-primary">Comentar</button>
        </form>

        <div class="listadoComentarios">
            <div class="comentarioCard">
                <img src="<?=$url?>/img/noneUser.png">
                <p>este es un comentario lorepasdaldskaldkaldaldaldlaksdkasldladadasdadadlasdadadadasdasa</p>
            </div>

            <div class="comentarioCard">
                <img src="<?=$url?>/img/noneUser.png">
                <p>este es un comentario lorepasdaldskaldkaldaldaldlaksdkasldladadasdadadlasdadadadasdasa</p>
            </div>
        </div>
    </div>
@stop
