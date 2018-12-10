@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align:center"> CONTROL DE LA ASISTENCIA </h3>
        <br>
      {{ Form::model($identificador,['route'=>['asistencias.detalle',$identificador->id],'method'=>'POST']) }}

   <table class="table table-striped" style="text-align:center" >
     <thead>
                <th>Alumno</th>
                <th>Fecha</th>
                <th>Asistencia</th>
                <th>Modificar</th>
                </thead>
                @foreach($asistencias as $registro)
                @if($registro->AsignacionAlumnosGrados->Grados->id == $identificador->id)
                    <tr>
                        <td>{{$registro->AsignacionAlumnosGrados->Alumnos->nombre}}</td>
                        <td><?php
                            $date = date_create($registro->fecha);
                            echo date_format($date, 'd-m-Y');
                            ?>
                        <td>{{$registro->estado}}</td>
                        <td><a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Modificar" href="{{route('asistencias.modificar',$registro->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a></td>
                    </tr>
                    @endif
                @endforeach
  </table>

    <br>
       <div class="form-group text-center" >
      <a class="btn btn-danger btn-lg" href="{{ route('asistencias.index') }}">Regresar</a>
    </div>

      {{ Form::close() }}
    </div>
  </div>
@endsection