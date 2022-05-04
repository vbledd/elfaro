@extends('layouts.master')

@section('titulo', 'Registro')

@section('contenido')


<form method="post" action="{{route('usuario-nuevo')}}" dataclass="d-flex flex-column bd-highlight mb-3" style="width: 90%;">
    <h1>Registro de Usuario</h1>
    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <input type="text" class="form-control"  name="nombre" placeholder="Nombre y Apellido" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control"  name="email" placeholder="Micorreo@gmail.com" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Contraseña:</label>
        <input type="password" class="form-control"  name="password" placeholder="Contraseña" required>
    </div>


    <input type="submit" class="btn btn-primary" style="margin-bottom:15px;" value="Registrarme">
</form>

@stop
