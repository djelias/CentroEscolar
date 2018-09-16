<div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre','Nombre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre',NULL, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Nombre del grado...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('seccion','Seccion') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('seccion') ? 'has-error' : "" }}">
       <i>{{ Form::text('seccion',NULL, ['class'=>'form-control', 'id'=>'seccion', 'placeholder'=>'seccion del grado...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('seccion', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('capacidad','Capacidad') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('capacidad') ? 'has-error' : "" }}">
        <i>{{ Form::text('capacidad',NULL, ['class'=>'form-control', 'id'=>'capacidad', 'placeholder'=>'Capacidad del grado...']) }}</i>
        <div class="help-block" >
        <strong>{{ $errors->first('Capacidad', '**Ingrese datos válidos A-Z') }}</strong> 
      </div>
      </div>
    </div>
    </div>

    <div class="form-group text-center">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('grados.index') }}">Cancelar</a>
    </div>