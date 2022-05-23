@extends('layouts.master')

@section('titulo', 'Noticias')

@section('contenido')

    <?php
        use \App\Http\Controllers\TemplateController;
        $url = TemplateController::getUrl();
    ?>

    @isset($inicio)
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
                    <div class="sliderContent2">
                        <h1>{{$listado->titulo}}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endisset

    @foreach ($noticias as $listado)

        <div class="cardNotice">
            <div class="cardNoticeImg" style="background-image: url('{{$url}}/img/{{ $listado->imagen}}');"></div>
            <div class="cardNoticeContent">
                <div class="cardNoticeContentCategoria"><span>{{$listado->getCategoria->nombre}}</span></div>
                <div class="cardNoticeContentTitulo">{{$listado->titulo}}</div>
                <div class="cardNoticeContentDescripcion">{{$listado->descripcion}}</div>
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
