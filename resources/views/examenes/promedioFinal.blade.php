@extends('layouts.app')
@section('content')
  <div class="row">
    <div>
        <h3 style="text-align:center"> CONTROL DE NOTAS </h3>
        <br>
    </div>
    <div>
      {{ Form::model(array($identificador,$identificador2,['route'=>['examenes.detalle',$identificador->id,$identificador2->id],'method'=>'POST'])) }}
      
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {{ $identificador2->nombre}}
        </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {{ $identificador2->nombre}}
        </div>
    </div>
<br>

      <table class="table table-striped" style="text-align:center" >
     <thead>
                <th style="text-align: center;">Materia</th>
                <th style="text-align: center;">Trimestre 1</th>
                <th style="text-align: center;">Trimestre 2</th>
                <th style="text-align: center;">Trimestre 3</th>
                <th style="text-align: center;">Promedio</th>
                </thead>
                <?php 
                $fechaActual = date("Y"); ?>
                @php $materiaActual = ''@endphp

                @foreach($asignacionMateriasGrados as $registro)
                @if($registro->Grados->id == $identificador->id)
                @if($registro->anio == $fechaActual)
                    <tr>
                        <td>@if($registro->Materias->nombre != $materiaActual)
                          {{$registro->Materias->nombre}}
                          @php $materiaActual = $registro->Materias->nombre @endphp
                          @endif
                          </td>
                          <td>
                            @foreach($examenes as $examen)
                            @if($examen->Materias->nombre == $registro->Materias->nombre)
                            @if($examen->trimestre == 1)
                            @if($examen->AsignacionAlumnosGrados->anio == $fechaActual)
                            @if($examen->AsignacionAlumnosGrados->Alumnos->id == $identificador->id)
                            {{$examen->promedio }}
                            @endif
                            @endif
                            @endif
                            @endif
                            @endforeach
                          </td>
                          <td>@foreach($examenes as $examen)
                            @if($examen->Materias->nombre == $registro->Materias->nombre)
                            @if($examen->trimestre == 2)
                            @if($examen->AsignacionAlumnosGrados->anio == $fechaActual)
                            @if($examen->AsignacionAlumnosGrados->Alumnos->id == $identificador->id)
                            {{$examen->promedio }}
                            @endif
                            @endif
                            @endif
                            @endif
                            @endforeach
                          </td>
                          <td>@foreach($examenes as $examen)
                            @if($examen->Materias->nombre == $registro->Materias->nombre)
                            @if($examen->trimestre == 3)
                            @if($examen->AsignacionAlumnosGrados->anio == $fechaActual)
                            @if($examen->AsignacionAlumnosGrados->Alumnos->id == $identificador->id)
                            {{$examen->promedio }}
                            @endif
                            @endif
                            @endif
                            @endif
                            @endforeach
                          </td>
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