@extends('layouts.master')

@section('titulo', 'Contacto')

@section('contenido')


<form method="post" action="{{route('contacto-nuevo')}}" dataclass="d-flex flex-column bd-highlight mb-3" style="width: 90%;">
    <h1>Contacto</h1>
    <div class="mb-3">
        <label class="form-label">Nombres:</label>
        <input type="text" class="form-control"  name="nombres" placeholder="Nombre y Apellido" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control"  name="email" placeholder="Micorreo@gmail.com" required>
    </div>

    <div class="form-floating" style="margin-bottom: 15px;">
        <textarea class="form-control" id="descripcionNoticia" name="mensaje" rows="4" cols="50" required></textarea>
        <label for="floatingTextarea">Mensaje:</label>
    </div>

    <input type="submit" class="btn btn-primary" style="margin-bottom:15px;" value="Enviar">
</form>

@stop
