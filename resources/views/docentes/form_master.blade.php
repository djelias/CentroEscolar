  <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombres','Nombres') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombres',NULL, ['class'=>'form-control', 'id'=>'nombres', 'placeholder'=>'Nombres del docente...']) }}</i> 
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
      {!! form::label('no_escalafon','Numero de Escalafon') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_escalafon') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_escalafon',NULL, ['class'=>'form-control', 'id'=>'no_escalafon', 'placeholder'=>'xxxxxxx','maxlength' => 7]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_escalafon', '**Ingrese Escalafon correctamente') }}</strong>
      </div>
    </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('docentes.index') }}">Cancelar</a>
    </div>

