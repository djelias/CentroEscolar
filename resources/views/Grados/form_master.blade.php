  <div class="row">
    <div class="col-sm-2">
      {!! form::label('codigo','codigo') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('codigo') ? 'has-error' : "" }}">
       <i>{{ Form::text('codigo',NULL, ['class'=>'form-control', 'id'=>'codigo', 'placeholder'=>'Codigo del grado...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('codigo', '**Ingrese datos válidos A-Z') }}</strong>
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
    <div class="form-group">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('grados.index') }}">Cancelar</a>
    </div>