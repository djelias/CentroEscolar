   <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombres','Nombres') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombres') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombres',NULL, ['class'=>'form-control', 'id'=>'nombres', 'placeholder'=>'Nombres del alumno...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombres', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
      {!! form::label('apellidos','Apellidos') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : "" }}">
        <i>{{ Form::text('apellidos',NULL, ['class'=>'form-control', 'id'=>'apellidos', 'placeholder'=>'Apellidos del alumno...']) }}</i>
        <div class="help-block" >
        <strong>{{ $errors->first('apellidos', '**Ingrese datos válidos A-Z') }}</strong> 
      </div>
      </div>
    </div>
    </div>
    <div class="row">
	    <div class="col-sm-5">
	      {!! form::label('correo','Correo Electrónico') !!}
	    </div>
      <div class="col-sm-7">
	    <div class="form-group {{ $errors->has('correo') ? 'has-error' : "" }}">
	      <i>{{Form :: text ('correo', NULL, ['class'=>'form-control', 'id'=>'correo', 'placeholder'=>'E-mail'])}}</i>
	        <div class="help-block"> 
	          <strong>{{ $errors->first('correo', '**Ingrese Direccion de correo electrónico') }}</strong>
          </div>
	        </div>
	    </div>
    </div>
    <div class="row">
    <div class="col-sm-5">
      {!! form::label('no_nie','Numero de NIE') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_nie') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_nie',NULL, ['class'=>'form-control', 'id'=>'no_nie', 'placeholder'=>'xxxxxxx','maxlength' => 7]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('nie', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
      </div>
  <div class="row">
    <div class="col-sm-5">
      {!! form::label('grado','Grado') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('grado') ? 'has-error' : "" }}">
       <i>{{ Form::text('grado',NULL, ['class'=>'form-control', 'id'=>'grado', 'placeholder'=>'Grado del alumno...']) }} </i>
        <div class="help-block"> 
          <strong>{{ $errors->first('grado', '**Ingrese Grado correctamente') }}</strong>
      </div>
    </div>
    </div>
   </div>
      <div class="row">
    <div class="col-sm-5">
      {!! form::label('t_matricula','Tipo de Matricula') !!}
    </div>
    <div class="col-sm-5">
    <div class="form-group {{ $errors->has('t_matricula') ? 'has-error' : "" }}">
      <i>{{Form :: text ('t_matricula', NULL, ['class'=>'form-control', 'id'=>'t_matricula', 'placeholder'=>'Tipo'])}}</i>
        <div class="help-block"> 
          <strong>{{ $errors->first('t_matricula', '**Ingrese Tipo correctamente') }}</strong>
    </div>
    </div>
    </div>
    </div>
   <div class="row">
    <div class="col-sm-5">
      {!! form::label('f_nacimiento','Fecha de nacimiento') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('f_nacimiento') ? 'has-error' : "" }}">
       <i>{{ Form::text('f_nacimiento',NULL, ['class'=>'form-control', 'id'=>'f_nacimiento', 'placeholder'=>'Fecha(yyyy-mm-dd)']) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('f_nacimiento', '**Ingrese la Fecha correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
     <div class="row">
    <div class="col-sm-5">
      {!! form::label('edad','Edad') !!}
    </div>
    <div class="col-sm-5">
    <div class="form-group {{ $errors->has('edad') ? 'has-error' : "" }}">
      <i>{{Form :: text ('edad', NULL, ['class'=>'form-control', 'id'=>'edad', 'placeholder'=>'Edad'])}}</i>
        <div class="help-block"> 
          <strong>{{ $errors->first('edad', '**Ingrese Edad correctamente') }}</strong>
    </div>
    </div>
    </div>
  </div>


    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('alumnos.index') }}">Cancelar</a>
    </div>

