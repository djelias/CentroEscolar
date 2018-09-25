   <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre','Nombre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre',NULL, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Nombre de Evaluación']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

   <div class="row">
    <div class="col-sm-2">
      {!! form::label('ponderacion','Ponderacion') !!}
    </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('ponderacion') ? 'has-error' : "" }}">
      
            <select name="ponderacion" class="form-control">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="0.10">10%</option>
                <option value="0.15">15%</option>
                <option value="0.20">20%</option>
                <option value="0.25">25%</option>
                <option value="0.30">30%</option>
                <option value="0.50">50%</option>
            </select>
           
            <div class="help-block" >
               <strong>{{ $errors->first('ponderacion', 'Obligatorio') }}</strong> 
           </div>
        </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-2">
      {!! form::label('nota','Nota') !!}
    </div>
    <div class="col-sm-2">
      <div class="form-group {{ $errors->has('nota') ? 'has-error' : "" }}">
       <i>{{ Form::text('nota',NULL, ['class'=>'form-control', 'id'=>'nota', 'placeholder'=>'xx.xx','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{!!$errors->first('nota', '<span class=error>:message</span>')!!}</strong>
      </div>
    </div>
  </div>
</div>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('notas.index') }}">Cancelar</a>
    </div>

