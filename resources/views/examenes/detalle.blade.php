@extends('layouts.app')
@section('content')
  <div class="row">
    <div>
        <h3 style="text-align:center"> CONTROL DE LAS NOTAS </h3>
        <br>
    </div>
    <div>
      {{ Form::model($identificador,['route'=>['examenes.detalle',$identificador->id],'method'=>'POST']) }}
      <table class="table table-striped" style="text-align:center" >
     <thead>
                <th style="text-align: center;">Alumno</th>
                <th style="text-align: center;">Materia</th>
                <th colspan="5" style="text-align: center;">Notas</th>
                <th style="text-align: center;">Trimestre</th>
                <th style="text-align: center;">Promedio</th>
                </thead>
                <?php 
                $fechaActual = date("Y"); ?>
                @php $alumnoActual = ''@endphp
                @php $materiaActual = ''@endphp
                @foreach($examenes as $registro)
                @if($registro->AsignacionAlumnosGrados->Grados->id == $identificador->id)
                @if($registro->AsignacionAlumnosGrados->anio == $fechaActual)
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
                    </tr>
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