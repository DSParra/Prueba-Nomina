@extends('home')

@section('opciones')
    <h1 class="text-center">Puesto creado</h1>
    <hr>
    <h2 class="font-weight-bold text-center">  Nombre: {{$puesto->nombre}}</h2>
    <h2 class="font-weight-bold text-center">  Descripcion: {{$puesto->descripcion}}</h2>
    <h2 class="font-weight-bold text-center">  Sueldo base: {{$puesto->sueldo_base}}</h2>
    <h2 class="font-weight-bold text-center">  Gratificacion: {{$puesto->gratificacion}}</h2>
    <h2 class="font-weight-bold text-center">  Despensa: {{$puesto->despensa}}</h2>
    
@endsection