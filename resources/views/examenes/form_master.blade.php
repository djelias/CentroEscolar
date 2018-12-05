<div class="row">
  <div class="col-sm-2">
      {!! form::label('SELECCIONE EL PERIODO') !!}
    </div>
   <div class="form-group">
       <select name="trimestre" class="form-control" style="width:200px;">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
         </select>

 </div>
 </div>
 
 <div class="row">
   <div class="col-sm-2">
      {!! form::label('SELECCIONE LA MATERIA') !!}
    </div>
    <div class="form-group">
       <select name="id_materia" id="materia" class="form-control" style="width:200px;" >
           @foreach($materias as $materia)
                      <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                 @endforeach
         </select>
 </div>
 </div>
 <br>
<div style="align-content: center;">
<table class="table table-condensed" style="text-align:center">
        <thead>
          <th style="width:85px; text-align: center;">No</th>
          <th style="text-align:center">Nombres</th>
          <th></th>
          <th style="text-align:center">nota 1</th>
          <th style="text-align:center">nota 2</th>
          <th style="text-align:center">nota 3</th>
          <th style="text-align:center">Actividad 1</th>
          <th style="text-align:center">Actividad 2</th>
          <th></th>
          <th style="text-align:center"></th>
        </thead>
 <tbody>
  <?php $no=1; ?>
            @foreach($asignacionAlumnosGrados as $asignacionAlumnoGrado)
            
<tr>
<td>{{$no++}}</td>
<td style="width:200px;">{{ $asignacionAlumnoGrado->Alumnos->nombre }}</td>
<td style="width:85px;">
<div class="form-group">
  {!!  Form::hidden('id_asignacion_al_gr[]', $asignacionAlumnoGrado->id, ['class'=>'form-control'])!!}
</div>
</td>
<td style="width:85px;">
<div class="form-group">
  <input type="text" name="examen1[]" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:85px;">
<div class="form-group">
  <input type="text" name="examen2[]" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:85px;">
<div class="form-group">
  <input type="text" name="examen3[]" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:85px;">
<div class="form-group">

  <input type="text" name="actividad1[]" placeholder="00.00" class="form-control" required="required">
</div>
</td>
<td style="width:85px;">
<div class="form-group">
 
  <input type="text" name="actividad2[]" placeholder="00.00" class="form-control" required="required">
</div>
</td>
 <!-- <td style="width:85px;">
<div class="col-sm-3">
       <input type="button" data-placement="top" title="Promedio" class="btn btn-info btn-sm " value="Promedio" onclick="Calcular();"> 
    </div>
</td>
<td style="width:85px;">
<div class="form-group">
{{ Form::text('promedio',NULL, ['class'=>'form-control', 'id'=>'promedio','readonly'=>'readonly', 'placeholder'=>'Promedio', 'data-placement'=>'top', 'title'=>'Este campo no se puede editar'])}}
</div>
</td>-->
                  </tr>

     
             @endforeach

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
</html>
