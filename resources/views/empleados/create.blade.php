@extends('home')

@section('opciones')

<h1>Creacion de Empleado</h1> 


<form action="{{route('empleado.store')}}" method="POST">
    @csrf                    
    
    <div class="form-group">
        <label for="">Nombre de empleado *</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="">Edad *</label><br>
        <input type="number" name="edad"require/>
    </div>
    <div class="form-group">
        <label for="">Correo *</label>
        <input type="email" name="correo"  class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="">Puesto *</label>
        <select name="id_puesto" >
            <option value="">Selecciona un puesto</option>
            @foreach ($puestos as $puesto)
                <option value="{{$puesto->id}}">{{$puesto->nombre}}</option>
                
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="Enviar"  class="btn btn-sm btn-primary"/>
    </div>
    


    </form>


@endsection