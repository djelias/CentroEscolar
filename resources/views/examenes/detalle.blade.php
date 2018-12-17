@extends('layouts.app')
@section('content')
  <div class="row">
    <div>
        <h3 style="text-align:center"> CONTROL DE LAS NOTAS </h3>
        <br>
    </div>
    <div>
      {{ Form::model(array($identificador,$identificador2,['route'=>['examenes.detalle',$identificador->id,$identificador2->id],'method'=>'POST'])) }}
      <table class="table table-striped" style="text-align:center" >
     <thead>
                <th style="text-align: center;">Alumno</th>
                <th style="text-align: center;">Materia</th>
                <th colspan="5" style="text-align: center;">Notas</th>
                <th style="text-align: center;">Trimestre</th>
                <th style="text-align: center;">Promedio</th>
                <th style="text-align: center;">Modificar</th>
                </thead>
                <?php 
                $fechaActual = date("Y"); ?>
                @php $alumnoActual = ''@endphp
                @php $materiaActual = ''@endphp
                @foreach($examenes as $registro)
                @if($registro->AsignacionAlumnosGrados->Grados->id == $identificador->id)
                @if($registro->AsignacionAlumnosGrados->Alumnos->id == $identificador2->id)
                @if($registro->AsignacionAlumnosGrados->anio == $fechaActual)
                @if($registro->trimestre == 1)
                    <tr>
                        <td>@if($registro->AsignacionAlumnosGrados->Alumnos->nombre != $alumnoActual)
                          {{$registro->AsignacionAlumnosGrados->Alumnos->nombre}}
                          @php $alumnoActual = $registro->AsignacionAlumnosGrados->Alumnos->nombre @endphp
                          @endif
                        </td>
                        <td>@if($registro->Materias->nombre != $materiaActual)
                          {{$registro->Materias->nombre}}
                          @php $materiaActual = $registro->Materias->nombre @endphp
                          @endif
                          </td>
                          <td>{{$registro->examen1 }}</td>
                          <td>{{$registro->examen2 }}</td>
                          <td>{{$registro->examen3 }}</td>
                          <td>{{$registro->actividad1 }}</td>
                          <td>{{$registro->actividad2 }}</td>
                          <td>{{$registro->trimestre }}</td>
                          <td>{{$registro->promedio }}</td>
                          <td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Modificar" href="{{route('examenes.modificar',$registro->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a></td>
                    </tr>
                    @endif
                    @endif
                    @endif
                    @endif
                @endforeach
  </table>

<table class="table table-striped" style="text-align:center" >
     <thead>
                <th style="text-align: center;">Alumno</th>
                <th style="text-align: center;">Materia</th>
                <th colspan="5" style="text-align: center;">Notas</th>
                <th style="text-align: center;">Trimestre</th>
                <th style="text-align: center;">Promedio</th>
                <th style="text-align: center;">Modificar</th>
                </thead>
                <?php 
                $fechaActual = date("Y"); ?>
                @php $alumnoActual = ''@endphp
                @php $materiaActual = ''@endphp
                @foreach($examenes as $registro)
                @if($registro->AsignacionAlumnosGrados->Grados->id == $identificador->id)
                @if($registro->AsignacionAlumnosGrados->Alumnos->id == $identificador2->id)
                @if($registro->AsignacionAlumnosGrados->anio == $fechaActual)
                @if($registro->trimestre == 2)
                    <tr>
                        <td>@if($registro->AsignacionAlumnosGrados->Alumnos->nombre != $alumnoActual)
                          {{$registro->AsignacionAlumnosGrados->Alumnos->nombre}}
                          @php $alumnoActual = $registro->AsignacionAlumnosGrados->Alumnos->nombre @endphp
                          @endif
                        </td>
                        <td>@if($registro->Materias->nombre != $materiaActual)
                          {{$registro->Materias->nombre}}
                          @php $materiaActual = $registro->Materias->nombre @endphp
                          @endif
                          </td>
                          <td>{{$registro->examen1 }}</td>
                          <td>{{$registro->examen2 }}</td>
                          <td>{{$registro->examen3 }}</td>
                          <td>{{$registro->actividad1 }}</td>
                          <td>{{$registro->actividad2 }}</td>
                          <td>{{$registro->trimestre }}</td>
                          <td>{{$registro->promedio }}</td>
                          <td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Modificar" href="{{route('examenes.modificar',$registro->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a></td>
                    </tr>
                    @endif
                    @endif
                    @endif
                    @endif
                @endforeach
  </table>

<table class="table table-striped" style="text-align:center" >
     <thead>
                <th style="text-align: center;">Alumno</th>
                <th style="text-align: center;">Materia</th>
                <th colspan="5" style="text-align: center;">Notas</th>
                <th style="text-align: center;">Trimestre</th>
                <th style="text-align: center;">Promedio</th>
                <th style="text-align: center;">Modificar</th>
                </thead>
                <?php 
                $fechaActual = date("Y"); ?>
                @php $alumnoActual = ''@endphp
                @php $materiaActual = ''@endphp
                @foreach($examenes as $registro)
                @if($registro->AsignacionAlumnosGrados->Grados->id == $identificador->id)
                @if($registro->AsignacionAlumnosGrados->Alumnos->id == $identificador2->id)
                @if($registro->AsignacionAlumnosGrados->anio == $fechaActual)
                @if($registro->trimestre == 3)
                    <tr>
                        <td>@if($registro->AsignacionAlumnosGrados->Alumnos->nombre != $alumnoActual)
                          {{$registro->AsignacionAlumnosGrados->Alumnos->nombre}}
                          @php $alumnoActual = $registro->AsignacionAlumnosGrados->Alumnos->nombre @endphp
                          @endif
                        </td>
                        <td>@if($registro->Materias->nombre != $materiaActual)
                          {{$registro->Materias->nombre}}
                          @php $materiaActual = $registro->Materias->nombre @endphp
                          @endif
                          </td>
                          <td>{{$registro->examen1 }}</td>
                          <td>{{$registro->examen2 }}</td>
                          <td>{{$registro->examen3 }}</td>
                          <td>{{$registro->actividad1 }}</td>
                          <td>{{$registro->actividad2 }}</td>
                          <td>{{$registro->trimestre }}</td>
                          <td>{{$registro->promedio }}</td>
                          <td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Modificar" href="{{route('examenes.modificar',$registro->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a></td>
                    </tr>
                    @endif
                    @endif
                    @endif
                    @endif
                @endforeach
  </table>

    <br>
       <div class="form-group text-center" >
      <a class="btn btn-danger btn-lg" href="{{ route('examenes.index') }}">Regresar</a>
    </div>

      {{ Form::close() }}
    </div>
@endsection