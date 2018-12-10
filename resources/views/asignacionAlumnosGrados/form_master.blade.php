<div class="row">
    <div class="col-sm-2">
      {!! form::label('Alumno') !!}
    </div>
     <div class="col-sm-10">
      <div class="form-group">
      <i><datalist name="id_alumno" id="id_alumno">
                @foreach($alumnos as $alumno)
                      <option value="{{$alumno->id}}">{{$alumno->nombre}}</option>
                 @endforeach
            </datalist></i> 
       <i>{{ Form::text('id_alumno',NULL, ['class'=>'form-control', 'id'=>'id_alumno', 'list'=>'id_alumno', 'placeholder'=>'Nombre completo del alumno...']) }}</i> 
  </div>
  </div>
 </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('Grado') !!}
    </div>
     <div class="col-sm-10">
      <div class="form-group">
      <i><select name="id_grado" class="form-control">
                <option disabled selected>Seleccione Grado</option>
                @foreach($grados as $grado)
                      <option value="{{$grado->id}}">{{$grado->id}}. {{$grado->nombre}} {{$grado->seccion}}</option>
                 @endforeach
            </select></i>  
  </div>
</div>
 </div>

 <div class="row">
    <div class="col-sm-2">
      {!! form::label('anio','Año') !!}
    </div>
    <div class="col-sm-4">
      <div class="form-group {{ $errors->has('anio') ? 'has-error' : "" }}">
       <i><select name="anio" class="form-control">
               <option disabled selected>Seleccione el Año</option>
                <?php 
                    $anio= date("Y");
                    $siguiente = ($anio++);
                      echo '<option value="'.$siguiente.'">'.$siguiente.'</option>';
                      echo '<option value="'.$anio.'">'.$anio.'</option>';
        
                ?>
            </select></i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('anio', '**Ingrese un año correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('asignacionAlumnosGrados.index') }}">Cancelar</a>
    </div>
  </div>
 