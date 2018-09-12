    <div class="row">
    <div class="col-sm-2">
      {!! form::label('id_materia','Codigo Materia') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('id_materia',NULL, ['class'=>'form-control', 'id'=>'id_materia', 'placeholder'=>'Codigo de la materia...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('id_materia', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre','Nombre Materia') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre',NULL, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Nombre de la Materia...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

 

    <div class="form-group text-center">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('materias.index') }}">Cancelar</a>
    </div>