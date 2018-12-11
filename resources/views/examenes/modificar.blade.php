@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align:center"> EDICION DE LAS EVALUACIONES </h3>
    	<br>
      {{ Form::model($examenes,['route'=>['examenes.update',$examenes->id],'method'=>'PATCH']) }}
      
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Trimestre : </strong>
            {{ $examenes->trimestre}}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Materia : </strong>
            {{ $examenes->Materias->nombre}}
        </div>
    </div>
 
 <br>
<div style="align-content: center;">
<table class="table table-condensed" style="text-align:center">
        <thead>
          <th style="text-align:center">Alumno</th>
          <th></th>
          <th style="text-align:center">Examen</th>
          <th style="text-align:center">Laboratorio</th>
          <th style="text-align:center">Actividad dotidiana</th>
          <th style="text-align:center">Actividad integradora 1</th>
          <th style="text-align:center">Actividad integradora 2</th>
          <th></th>
          <th style="text-align:center"></th>
        </thead>
 <tbody>
<tr>
<td style="width:200px;">{{ $examenes->AsignacionAlumnosGrados->Alumnos->nombre }}</td>
<td style="width:85px;">
<div class="form-group">
  {!!  Form::hidden('id_asignacion_al_gr', $examenes->AsignacionAlumnosGrados->id, ['class'=>'form-control'])!!}
</div>
</td>
<td style="width:100px;">
<div class="form-group">
  <input type="text" name="examen1" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:100px;">
<div class="form-group">
  <input type="text" name="examen2" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:100px;">
<div class="form-group">
  <input type="text" name="examen3" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:100px;">
<div class="form-group">

  <input type="text" name="actividad1" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:100px;">
<div class="form-group">
 
  <input type="text" name="actividad2" placeholder="00.00" class="form-control" required="required">
</div>
</td>
                  </tr>


        </tbody>
  </table>
  </div>
<div style="text-align: center;">
  {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}

  <a class=" btn btn-danger btn-lg" href="{{ route('examenes.index') }}">Cancelar</a>
</div>
                            
<!--Script para calcular promedio a partir de las entradas de texto -->
<script>
      function Calcular() {
          var vr1[] = document.getElementById('examen1[]').value;
          var vr2[]= document.getElementById('examen2[]').value;
          var vr3[] = document.getElementById('examen3[]').value;
          var vr4[] = document.getElementById('actividad1[]').value;
          var vr5[] = document.getElementById('actividad2[]').value;
          var p[] = ((((parseFloat(vr1[])+parseFloat(vr2[]))/2)*0.30)+(parseFloat(vr3[])*0.35)+((parseFloat(vr4[])+parseFloat(vr5[]))/2)*0.35);
        }
</script>

      {{ Form::close() }}
    </div>
  </div>
@endsection