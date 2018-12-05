@extends('layouts.app')
@section('content')
<br>
<br>
<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left ">
            <h3 > EVALUACIONES</h3>
            <br>
        </div>
    </div>
</div>

<table border="1" class="table table-striped" style="text-align:center">
    <tr>
        <td>Nombre del alumno</td>
        <td>{{ $examenes->AsignacionAlumnosGrados->Alumnos->nombre }}</td>
        <td>NIE</td>
        <td>{{ $examenes->AsignacionAlumnosGrados->Alumnos->no_nie }}</td>
        <td>GRADO</td>
        <td>{{ $examenes->AsignacionAlumnosGrados->Grados->nombre }} {{ $examenes->AsignacionAlumnosGrados->Grados->seccion }}</td>
    </tr>
    <tr>
        <td>{{$examenes->trimestre}} Trimestre</td>
        <td>Noviembre</td>
        <td>Docente</td>
        <td colspan="3">Nombre del docente</td>
    </tr>
    <tr>
        <td>ASIGNATURAS BASICAS</td>
        <td>Act. Integradora</td>
        <td>Act. Cotidiana</td>
        <td>Pruebas</td>
        <td colspan="2">Promedio</td>
    </tr>
    <tr>
        <td>Lenguaje</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>Matematica</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>Ciencia salud y medio ambiente</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>Estudios sociales</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>Educacion artistica</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>Educacion fisica</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>MATERIAS ESPECIALES</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>Computacion</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td>Religion</td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="2"></td>
    </tr>
</table>

            <br/>
            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
</div>

@endsection