   <div class="row">
    <div class="col-sm-3">
      {!! form::label('Alumno') !!}
    </div>
     <div class="col-sm-8">
      <div class="form-group {{ $errors->has('id_asignacion_al_gr') ? 'has-error' : "" }}">
      <i><select name="id_asignacion_al_gr" class="form-control">
               <option disabled selected>Seleccione el alumno</option>
                @foreach($asignacionAlumnosGrados as $asignacionAlumnoGrado)
                      <option value="{{$asignacionAlumnoGrado->id}}">{{$asignacionAlumnoGrado->Alumnos->nombres}} {{$asignacionAlumnoGrado->Alumnos->apellidos}}</option>
                 @endforeach
            </select></i>
            <div class="help-block"> 
                <strong>{{ $errors->first('id_asignacion_al_gr', 'Seleccione uno') }}</strong>
          </div>
 </div>
</div>
 </div>

   <div class="row">
    <div class="col-sm-3">
      {!! form::label('Materia') !!}
    </div>
     <div class="col-sm-8">
      <div class="form-group {{ $errors->has('id_materia') ? 'has-error' : "" }}">
      <i><select name="id_materia" class="form-control">
               <option disabled selected>Seleccione el materia</option>
                @foreach($materias as $materia)
                      <option value="{{$materia->id}}">{{$materia->id}}. {{$materia->nombre}}</option>
                 @endforeach
            </select></i>
            <div class="help-block"> 
                <strong>{{ $errors->first('id_materia', 'Seleccione uno') }}</strong>
          </div>
 </div>
</div>
 </div>

<div class="row">
   <div class="col-sm-3">
      {!! form::label('examen1','Examen 1') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('examen1') ? 'has-error' : "" }}">
       <i>{{ Form::text('examen1',NULL, ['class'=>'form-control', 'id'=>'examen1', 'placeholder'=>'Nota','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
           <strong>{{ $errors->first('examen2', 'Ingrese correctamente') }}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-3">
      {!! form::label('examen2','Examen 2') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('examen2') ? 'has-error' : "" }}">
       <i>{{ Form::text('examen2',NULL, ['class'=>'form-control', 'id'=>'examen2', 'placeholder'=>'Nota','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('examen2', 'Ingrese correctamente') }}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-3">
      {!! form::label('examen3','Examen 3') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('examen3') ? 'has-error' : "" }}">
       <i>{{ Form::text('examen3',NULL, ['class'=>'form-control', 'id'=>'examen3', 'placeholder'=>'Nota','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('examen3', 'Ingrese correctamente') }}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-3">
      {!! form::label('actividad1','Actividad integradora 1') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('actividad1') ? 'has-error' : "" }}">
       <i>{{ Form::text('actividad1',NULL, ['class'=>'form-control', 'id'=>'actividad1', 'placeholder'=>'Nota','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('actividad1', 'Ingrese correctamente') }}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-3">
      {!! form::label('actividad2','Actividad integradora 2') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('actividad2') ? 'has-error' : "" }}">
       <i>{{ Form::text('actividad2',NULL, ['class'=>'form-control', 'id'=>'actividad2', 'placeholder'=>'Nota','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('actividad2', 'Ingrese correctamente') }}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-3">
      {!! form::label('trimestre','Periodo') !!}
    </div>
    <div class="col-sm-4">
      <div class="form-group {{ $errors->has('trimestre') ? 'has-error' : "" }}">
       <i><select name="trimestre" id="seccion" class="form-control" >
                <option value="" disabled selected>Seleccione</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select></i>
        <div class="help-block"> 
          <strong>{{ $errors->first('trimestre', 'Ingrese correctamente') }}</strong>
      </div>
    </div>
  </div>
</div>

 <div class="row">
  <br>
   <div class="col-sm-3">
       <input type="button" data-placement="top" title="Promedio" class="btn btn-info btn-lg " value="Promedio" onclick="Calcular();"> 
    </div>
    <div class="col-sm-4">
      <div class="form-group text">
       <i>{{ Form::text('promedio',NULL, ['class'=>'form-control', 'id'=>'promedio','readonly'=>'readonly', 'placeholder'=>'Promedio', 'data-placement'=>'top', 'title'=>'Este campo no se puede editar'])}}</i> 
       
  </div>
</div>
</div>
<div class="row">
  <div class="col-sm-10">
          <i>{!! form::label('promedio','Presione el botón PROMEDIO para obtenerlo automáticamente.') !!}</i>
    </div>
</div>
  
    <br>
    <br>
       <div class="form-group text-center{{ $errors->has('promedio') ? 'has-error' : "" }}">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class=" btn btn-danger btn-lg" href="{{ route('examenes.index') }}">Cancelar</a>
    </div>

<!--Script para calcular promedio a partir de las entradas de texto -->
<script>
      function Calcular() {
          var vr1 = document.getElementById('examen1').value;
          var vr2 = document.getElementById('examen2').value;
          var vr3 = document.getElementById('examen3').value;
          var vr4 = document.getElementById('actividad1').value;
          var vr5 = document.getElementById('actividad2').value;
          var p = (parseFloat(vr1)+parseFloat(vr2)+parseFloat(vr3)+parseFloat(vr4)+parseFloat(vr5))/5;
          document.getElementById('promedio').value = ("%.2", p);
        }
</script>
</html>
