@extends('layouts.master')

@section('titulo', 'Noticias')

@section('contenido')

    <?php
        use \App\Http\Controllers\TemplateController;
        $url = TemplateController::getUrl();
    ?>

    <div id="hola">
        <h1>Hola</h1>
        <div>div1</div>
        <div>div2</div>
        <div>div3</div>
        <div>div4</div>
    </div>
    @foreach ($noticias as $listado)

        <div class="card mb-3"
            @if ($listado->estado == 1)
            style="width: 90%; border: 1px solid #F39B00"
            @endif

        >
            <img src="{{$url}}/img/{{ $listado->imagen}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    @if ($listado->estado == 1)
                    <h4 style="display:block; padding:5px; background-color: #F39B00">"Nuevo" {{$listado->titulo}}</h4>
                    @else
                    {{$listado->titulo}}
                    @endif
                </h5>
                <p class="class="card-subtitle mb-2 text-muted">{{$listado->getCategoria->nombre}}</p>
                <p class="card-text">{{$listado->descripcion}}</p>

            </div>
        </div>
    @endforeach
    @isset($cantidadNoticias)
    <h3>Cantidad de noticias : {{$cantidadNoticias}}</h3>
    @endisset


    <script>

        $('#hola').slick();

    </script>
@stop
