@extends('layouts.app')
@section('content')
  <div class="row">
    <div>
        <h3 style="text-align:center"> CENTRO ESCOLAR CATOLICO SANTO TOMAS </h3>
        <br>
    </div>
    <div>
      {{ Form::model(array($identificador,$identificador2,['route'=>['examenes.detalle',$identificador->id,$identificador2->id],'method'=>'POST'])) }}
        <p>Nombre del alumno: {{$identificador2->nombre}} &nbsp;&nbsp;&nbsp;&nbsp;NIE: {{$identificador2->no_nie}} &nbsp;&nbsp;&nbsp;&nbsp; Grado: {{$identificador->nombre}}<br><br>
        Trimestre: {{$trimestr}} &nbsp;&nbsp;&nbsp;&nbsp; Docente: {{ Auth::user()->name }}</p>

      <table class="table table-striped" style="text-align:center" >
     <thead>
                <th style="text-align: center;">Materia</th>
                <th style="text-align:center">Examen</th>
                <th style="text-align:center">Laboratorio</th>
                <th style="text-align:center">Actividad cotidiana</th>
                <th style="text-align:center">Actividad integradora 1</th>
                <th style="text-align:center">Actividad integradora 2</th>
                <th style="text-align: center;">Promedio</th>
                <th style="text-align: center;">Modificar</th>
                </thead>
                <?php 
                $fechaActual = date("Y"); ?>
                @foreach($examenes as $registro)
                @if($registro->AsignacionAlumnosGrados->Grados->id == $identificador->id)
                @if($registro->AsignacionAlumnosGrados->Alumnos->id == $identificador2->id)
                @if($registro->AsignacionAlumnosGrados->anio == $fechaActual)
                @if($registro->trimestre == $trimestr)
                    <tr>
                        <td>{{$registro->Materias->nombre}}</td>
                          <td>{{$registro->examen1 }}</td>
                          <td>{{$registro->examen2 }}</td>
                          <td>{{$registro->examen3 }}</td>
                          <td>{{$registro->actividad1 }}</td>
                          <td>{{$registro->actividad2 }}</td>
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