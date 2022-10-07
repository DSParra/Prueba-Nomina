@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sistema de nominas ->
                    <a href="{{route('puesto.create')}}" class="btn btn-sm btn-primary float-rigth">Crear Puesto</a>
                    <a href="{{route('empleado.index')}}" class="btn btn-sm btn-primary float-rigth">Empleados</a>
                    <a href="{{route('nomina.index')}}" class="btn btn-sm btn-primary float-rigth">Calcular nomina</a>
                    <a href="{{route('reporte.index')}}" class="btn btn-sm btn-primary float-rigth">Generar Reporte PDF</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @yield('opciones')
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
