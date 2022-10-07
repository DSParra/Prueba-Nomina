@extends('home')

@section('opciones')

<h1 class="text-center">Mostrando Nomina</h1> 

<table class="table">
    <thead>
        <tr>
            <th>Nombre de empleado</th>
            <th>Edad</th>
            <th>Puesto</th>            
            <th>Total Percepciones</th>            
            <th>Total Deducciones</th>            
        </tr>
    </thead>
    <tbody>
        {{-- {{dd($empleados)}} --}}
        @foreach ($nominas as $nomina)
            <tr>
                <td>{{$nomina -> nombre}}</td>
                <td>{{$nomina -> edad}}</td>
                <td>{{$nomina -> puesto -> nombre}}</td>
                <td>{{$nomina -> puesto -> sueldo_base + $nomina -> puesto -> gratificacion + $nomina -> puesto -> despensa }}</td>
                <td>{{$nomina -> puesto -> sueldo_base + $nomina -> puesto -> gratificacion + $nomina -> puesto -> despensa }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection