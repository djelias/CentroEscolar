  <div class="row">
    <div class="col-sm-3">
      {!! form::label('nombre','Nombre') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre',NULL, ['class'=>'form-control','id'=>'nombre','placeholder'=>'Nombre del evento']) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('nombre', 'Ingrese nombre correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
  <div class="row">
    <div class="col-sm-3">
      {!! form::label('fecha','Fecha') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('fecha') ? 'has-error' : "" }}">
       <i>{{ Form::text('fecha',NULL, ['class'=>'form-control', 'id'=>'fecha', 'placeholder'=>'Fecha del evento']) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('fecha', 'Ingrese Escalafón correctamente') }}</strong>
      </div>
    </div>
    </div>
   </div>

   <div class="row">
    <div class="col-sm-3">
      {!! form::label('descripcion','Descripcion') !!}
    </div>
    <div class="col-sm-8">
    <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : "" }}">
      <i>{{Form :: textarea ('descripcion', NULL, ['class'=>'form-control', 'id'=>'descripcion', 'placeholder'=>'Descripcion del evento'])}}</i>
    </div>
    </div>

   <div class="row">
    <div class="col-sm-3">
      {!! form::label('lugar','Lugar') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('lugar') ? 'has-error' : "" }}">
       <i>{{ Form::text('lugar',NULL, ['class'=>'form-control', 'id'=>'lugar', 'placeholder'=>'Donde se llevara a cabo']) }} </i> 
    </div>
  </div>
      </div>
 
    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('eventos.index') }}">Cancelar</a>
    </div>