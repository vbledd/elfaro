@extends('layouts.master')

@section('titulo', 'Miguelo')

@section('contenido')

    @foreach ($noticias as $listado)

        <div class="card mb-3"
            @if ($listado->estado == 1)
            style="width: 80%; border: 1px solid #F39B00"
            @else
                style="width: 68%;"
            @endif

        >
            <img src="./img/{{ $listado->imagen}}" class="card-img-top" alt="...">
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

@stop
