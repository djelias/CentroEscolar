@extends('layouts.app')
@section('content')
<div class="row"  >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left ">
            <h3 > DATOS DE LA ASIGNACION</h3>
            <br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Grado : </strong>
            {{ $asignacionAlumnoGrado->Grados->nombre}} {{ $asignacionAlumnoGrado->Grados->seccion}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alumno : </strong>
            {{ $asignacionAlumnoGrado->Alumnos->nombres}} {{ $asignacionAlumnoGrado->Alumnos->apellidos}}
        </div>
    </div>

            <br/>
            <a class="btn btn-primary" href="{{ route('asignacionAlumnosGrados.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
    </div>

@endsection
