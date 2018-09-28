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
   <div class="col-sm-2">
      {!! form::label('examen1','Examen 1') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('examen1') ? 'has-error' : "" }}">
       <i>{{ Form::text('examen1',NULL, ['class'=>'form-control', 'id'=>'examen1', 'placeholder'=>'Ingrese la nota del examen','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('examen1', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-2">
      {!! form::label('examen2','Examen 2') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('examen2') ? 'has-error' : "" }}">
       <i>{{ Form::text('examen2',NULL, ['class'=>'form-control', 'id'=>'examen2', 'placeholder'=>'Ingrese la nota del examen','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('examen2', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-2">
      {!! form::label('examen3','Examen 3') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('examen3') ? 'has-error' : "" }}">
       <i>{{ Form::text('examen3',NULL, ['class'=>'form-control', 'id'=>'examen3', 'placeholder'=>'Ingrese la nota del examen','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('examen3', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-2">
      {!! form::label('actividad1','Actividad integradora 1') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('actividad1') ? 'has-error' : "" }}">
       <i>{{ Form::text('actividad1',NULL, ['class'=>'form-control', 'id'=>'actividad1', 'placeholder'=>'Ingrese la nota de la actividad integradora','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('actividad1', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-2">
      {!! form::label('actividad2','Actividad integradora 2') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('actividad2') ? 'has-error' : "" }}">
       <i>{{ Form::text('actividad2',NULL, ['class'=>'form-control', 'id'=>'actividad2', 'placeholder'=>'Ingrese la nota de la actividad integradora 2','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('actividad2', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-sm-2">
      {!! form::label('trimestre','Trimestre') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('trimestre') ? 'has-error' : "" }}">
       <i>{{ Form::text('trimestre',NULL, ['class'=>'form-control', 'id'=>'trimestre', 'placeholder'=>'Ingrese el trimestre','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('trimestre', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
</div>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('examenes.index') }}">Cancelar</a>
    </div>

