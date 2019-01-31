@extends('layouts.app')
@section('content')
  <div class="row">
    <div>
        <h3 style="text-align:center"> ALUMNOS </h3>
        <br>
    </div>
    <div>
      {{ Form::model($identificador,['route'=>['examenes.listado',$identificador->id],'method'=>'POST']) }}
      <table class="table table-striped" style="text-align:center" >
     <thead>
                <th style="text-align: center;">Alumno</th>
                <th style="text-align: center;" colspan="3">Trimestres</th>
                <th style="text-align: center;">Detalle Final</th>
                </thead>
                <?php $fechaActual = date("Y"); ?>
                @foreach($asignacionAlumnosGrados as $registro)
                @if($registro->Grados->id == $identificador->id)
                @if($registro->anio == $fechaActual)
                    <tr>
                        <td>{{$registro->Alumnos->nombre}}</td>
                          <td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="1" href="{{ url('examenes/detalle', ["idgrado" => $registro->Grados->id, "idalumno" => $registro->Alumnos->id, "trim" => 1]) }}">
              <i class="glyphicon">1</i></a></td><td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="2" href="{{ url('examenes/detalle', ["idgrado" => $registro->Grados->id, "idalumno" => $registro->Alumnos->id, "trim" => 2]) }}">
              <i class="glyphicon">2</i></a></td><td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="3" href="{{ url('examenes/detalle', ["idgrado" => $registro->Grados->id, "idalumno" => $registro->Alumnos->id, "trim" => 3]) }}">
              <i class="glyphicon">3</i></a></td>
                          <td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Detalle" href="{{ url('examenes/promedioFinal', ["idgrado" => $registro->Grados->id, "idalumno" => $registro->Alumnos->id]) }}">
              <i class="glyphicon glyphicon-list-alt"></i></a></td>
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