@extends('layouts.app')
@section('content')
  <div class="row">
    <div>
        <h3 style="text-align:center"> CONTROL DE NOTAS </h3>
        <br>
    </div>
    <div>
      {{ Form::model(array($identificador,$identificador2,['route'=>['examenes.detalle',$identificador->id,$identificador2->id],'method'=>'POST'])) }}
      
<p>Nombre del alumno: {{$identificador2->nombre}} &nbsp;&nbsp;&nbsp;&nbsp;NIE: {{$identificador2->no_nie}} &nbsp;&nbsp;&nbsp;&nbsp; Grado: {{$identificador->nombre}}<br><br>
Docente: {{ Auth::user()->name }}</p>

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

                <?php 
                            $promedio1 = '0';
                            $promedio2 = '0';
                            $promedio3 = '0';
                            $final = '0';
                             ?>

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

                            <?php 
                            $promedio1 = $examen->promedio;
                             ?>

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

                            <?php 
                            $promedio2 = $examen->promedio;
                             ?>

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

                            <?php 
                            $promedio3 = $examen->promedio;
                             ?>

                            @endif
                            @endif
                            @endif
                            @endif
                            @endforeach
                          </td>
                          <td>
                            <?php 
                            $final = round((($promedio1+$promedio2+$promedio3)/3),2);
                            if ($final == 0) {
                              echo "N/I";
                            }else
                            echo "$final";
                             ?>
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