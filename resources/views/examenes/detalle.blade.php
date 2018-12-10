@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align:center"> CONTROL DE LAS NOTAS </h3>
        <br>
      {{ Form::model($identificador,['route'=>['examenes.detalle',$identificador->id],'method'=>'POST']) }}

      <div class="input-group"> 
            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Buscar'])!!}
        </div>
         <button type="submit" class="glyphicon glyphicon-search btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar"></button>
        {!! Form::close()!!}

   <table class="table table-striped" style="text-align:center" >
     <thead>
                <th>Alumno</th>
                <th>Materia</th>
                <th colspan="5">Notas</th>
                <th>Trimestre</th>
                <th>Promedio</th>
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
  </div>
@endsection