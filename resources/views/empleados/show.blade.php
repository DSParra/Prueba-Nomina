@extends('home')

@section('opciones')
    <h1 class="text-center">Empleado creado</h1>
    <hr>
    <h2 class="font-weight-bold text-center">  Nombre: {{$empleado->nombre}}</h2>
    <h2 class="font-weight-bold text-center">  Edad: {{$empleado->edad}}</h2>
    <h2 class="font-weight-bold text-center">  Correo base: {{$empleado->correo}}</h2>
    <h2 class="font-weight-bold text-center">  Puesto: {{$empleado->id_puesto}}</h2>
@endsection