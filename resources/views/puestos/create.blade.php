@extends('home')

@section('opciones')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Puesto</div>
                <div class="card-body">
                    <form action="{{route('puesto.store')}}" method="POST">
                    @csrf                    
                    
                    <div class="form-group">
                        <label for="">Nombre del puesto *</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Descripcion de puesto *</label>
                        <textarea name="descripcion" rows="6" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Sueldo base *</label>
                        <input type="number" name="sueldo_base"  class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="">Gratificacion *</label>
                        <input type="number" name="gratificacion"  class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="">Despensa *</label>
                        <input type="number" name="despensa"  class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="Enviar"  class="btn btn-sm btn-primary"/>
                    </div>
                    


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection