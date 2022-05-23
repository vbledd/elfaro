@extends('layouts.master')

@section('titulo', 'Noticias')

@section('contenido')

    <?php
        use \App\Http\Controllers\TemplateController;
        $url = TemplateController::getUrl();
    ?>

    <div class="topContainerIndex">
        <div id="lastNewsSlider" class="newsSlider" >
            @foreach ($noticias as $listado)
                <div class="mainSlider" style="background-image: url('{{$url}}/img/{{ $listado->imagen}}');">
                    <div class="sliderContent">
                        <h1>{{$listado->titulo}}</h1>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="newsGrid">
            @foreach ($noticias as $listado)
                <div class="newsGridImg" style="background-image: url('{{$url}}/img/{{ $listado->imagen}}');">

                </div>
            @endforeach
        </div>
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



@stop

@section('scripts')
<script>
    $(document).ready(function(){
        $('#lastNewsSlider').slick({
            dots: false,
            infinite: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            pauseOnHover: true,
        });
    })

</script>
@stop
