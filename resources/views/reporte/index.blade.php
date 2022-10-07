@extends('home')

@section('opciones')

<h1 class="text-center">Reporte de sueldos</h1> 
<a href="{{route('pdf.index')}}" class="btn btn-primary btn-sm text-center">
    Exportar Pdf
</a>

<table class="table">
    <thead>
        <tr>
            <th>Nombre de empleado</th>
            <th>Edad</th>
            <th>Puesto</th>            
            <th>Sueldo Bruto</th>            
            <th>Sueldo Neto</th>            
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