@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align:center"> CONTROL DE LA ASISTENCIA </h3>
        <br>
      {{ Form::model($identificador,['route'=>['asistencias.show'],'method'=>'POST']) }}
      

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 form-group">
        <div class="form-group">
            <label for="fecha"></label>
            <input type="date" name="fecha" class="form-control" placeholder="Fecha ...">
        </div>
    </div>

   <table class="table table-striped" style="text-align:center" >
     <thead>
                <th>Alumno</th>
                <th>Asistencia</th>
                </thead>
                @foreach($asistencias as $registro)
                @if($registro->Grados->id == $identificador->id)
                    <tr>
                        <td>{{$registro->Alumnos->nombre}}</td>
                        <td>{{$registro->estado}}</td>
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