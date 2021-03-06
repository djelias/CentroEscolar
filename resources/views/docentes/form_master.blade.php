   <div class="row">
    <div class="col-sm-3">
      {!! form::label('Nombre') !!}
    </div>
     <div class="col-sm-8">
      <div class="form-group {{ $errors->has('id_usuario') ? 'has-error' : "" }}">
      <i><select name="id_usuario" class="form-control">
               <option disabled selected>Seleccione el docente</option>
                @foreach($users as $user)
                  @if ($user->usuario=='Docente')
                      <option value="{{$user->id}}">{{$user->name}}</option>
                  @endif
                 @endforeach
            </select></i>
            <div class="help-block"> 
                <strong>{{ $errors->first('id_usuario', 'Seleccione uno') }}</strong>
          </div>
 </div>
</div>
 </div>
    <div class="row">
    <div class="col-sm-3">
      {!! form::label('no_dui','No. de DUI') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_dui') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_dui',NULL, ['class'=>'form-control','id'=>'no_dui','placeholder'=>'xxxxxxxx-x','maxlength' => 10]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_dui', 'Ingrese DUI correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
  <div class="row">
    <div class="col-sm-3">
      {!! form::label('no_escalafon','No. de Escalafón') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_escalafon') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_escalafon',NULL, ['class'=>'form-control', 'id'=>'no_escalafon', 'placeholder'=>'xxxxxxx','maxlength' => 7]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_escalafon', 'Ingrese Escalafón correctamente') }}</strong>
      </div>
    </div>
    </div>
   </div>
   <div class="row">
    <div class="col-sm-3">
      {!! form::label('telefono','Teléfono') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('telefono') ? 'has-error' : "" }}">
       <i>{{ Form::text('telefono',NULL, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'xxxxxxxx','maxlength' => 8]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('telefono', 'Ingrese Teléfono correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
   <div class="row">
    <div class="col-sm-3">
      {!! form::label('direccion','Direccion') !!}
    </div>
    <div class="col-sm-8">
    <div class="form-group {{ $errors->has('direccion') ? 'has-error' : "" }}">
      <i>{{Form :: text ('direccion', NULL, ['class'=>'form-control', 'id'=>'direccion', 'placeholder'=>'Direccion'])}}</i>
        <div class="help-block"> 
          <strong>{{ $errors->first('direccion', 'Ingrese Direccion correctamente') }}</strong>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-3">
      {!! form::label('estado','Estado') !!}
    </div>
    <div class="col-sm-5">
        <i>{{ Form::select('estado', ['1'=>'Activo', '0'=>'Inactivo'], null, ['class'=>'form-control']) }}</i>
      </div>
    </div>
 
    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('docentes.index') }}">Cancelar</a>
    </div>

    <!--Script para Colocar guion automatico en numero de DUI-->
<script type="text/javascript">
  $(document).ready(Principal);
    function Principal(){
        var flag1 = true;
        $(document).on('keyup','[id=no_dui]',function(e){
            if($(this).val().length == 8 && flag1) {
                $(this).val($(this).val()+"-");
                flag1 = false;
            }
        });
    }
</script> 