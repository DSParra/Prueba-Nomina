@extends('home')

@section('opciones')

<h1 class="text-center">Mostrando Empleados</h1> 
<a href="{{route('empleado.create')}}" class="btn btn-primary btn-sm text-center">
    Agregar
</a>

<table class="table">
    <thead>
        <tr>
            <th>Nombre de empleado</th>
            <th>Edad</th>
            <th>Puesto</th>
            
            
        </tr>
    </thead>
    <tbody>
        {{-- {{dd($empleados)}} --}}
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado -> nombre}}</td>
                <td>{{$empleado -> edad}}</td>
                <td>{{$empleado -> puesto -> nombre}}</td>
                <td>
                    <a href="{{route('empleado.edit',$empleado->id)}}" class="btn btn-primary btn-sm">
                        Editar
                    </a>
                </td>
                <td>
                    <form action="{{route('empleado.destroy',$empleado->id)}}" method="POST">
                        @csrf
                        @method('Delete')
                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger"
                        onclick="return confirm('¿Desea eliminar?..')">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection