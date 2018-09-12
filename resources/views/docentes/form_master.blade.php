   <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombres','Nombres') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombres',NULL, ['class'=>'form-control', 'id'=>'nombres', 'placeholder'=>'No mbres del docente...']) }}</i> 
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
        <i>{{ Form::text('apellidos',NULL, ['class'=>'form-control', 'id'=>'apellidos', 'placeholder'=>'Apellidos del docente...']) }}</i>
        <div class="help-block" >
        <strong>{{ $errors->first('apellidos', '**Ingrese datos válidos A-Z') }}</strong> 
      </div>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-5">
      {!! form::label('no_dui','Numero de DUI') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_dui') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_dui',NULL, ['class'=>'form-control', 'id'=>'no_dui', 'placeholder'=>'xxxxxxxx-x','maxlength' => 10]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_dui', '**Ingrese DUI correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
  <div class="row">
    <div class="col-sm-5">
      {!! form::label('no_escalafon','Numero de Escalafón') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_escalafon') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_escalafon',NULL, ['class'=>'form-control', 'id'=>'no_escalafon', 'placeholder'=>'xxxxxxx','maxlength' => 7]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_escalafon', '**Ingrese Escalafón correctamente') }}</strong>
      </div>
    </div>
    </div>
   </div>
   <div class="row">
    <div class="col-sm-5">
      {!! form::label('telefono','Teléfono (Sin guiones)') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('telefono') ? 'has-error' : "" }}">
       <i>{{ Form::text('telefono',NULL, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'xxxxxxxx','maxlength' => 8]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('telefono', '**Ingrese Teléfono correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
   <div class="row">
    <div class="col-sm-5">
      {!! form::label('direccion','Direccion') !!}
    </div>
    <div class="form-group {{ $errors->has('direccion') ? 'has-error' : "" }}">
      <i>{{Form :: text ('direccion', NULL, ['class'=>'form-control', 'id'=>'direccion', 'placeholder'=>'Direccion'])}}</i>
        <div class="help-block"> 
          <strong>{{ $errors->first('direccion', '**Ingrese Direccion correctamente') }}</strong>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-5">
      {!! form::label('correo','Correo Electrónico') !!}
    </div>
    <div class="form-group {{ $errors->has('correo') ? 'has-error' : "" }}">
      <i>{{Form :: text ('correo', NULL, ['class'=>'form-control', 'id'=>'correo', 'placeholder'=>'E-mail'])}}</i>
        <div class="help-block"> 
          <strong>{{ $errors->first('correo', '**Ingrese Direccion de correo electrónico') }}</strong>
    </div>
    </div>
    </div>
    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('docentes.index') }}">Cancelar</a>
    </div>
