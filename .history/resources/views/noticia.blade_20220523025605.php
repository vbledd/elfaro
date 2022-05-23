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
        <form>
            <label>Nuevo Comentario: </label>
            <input type="text" name="comentario" id="comentario" placeholder="Comentario">
            <input type="submit" value="Comentar">
        </form>

        <div class="listadoComentarios">
            <div class="comentarioCard">

            </div>
        </div>
    </div>
@stop
