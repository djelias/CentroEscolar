<div class="row">
    <div class="col-sm-2">
      {!! form::label('Alumno') !!}
    </div>
     <div class="col-sm-10">
      <div class="form-group">
      <i><select name="id_alumno" class="form-control">
                <option disabled selected>Seleccione Alumno</option>
                @foreach($alumnos as $alumno)
                      <option value="{{$alumno->id}}">{{$alumno->id}}. {{$alumno->nombres}} {{$alumno->apellidos}}</option>
                 @endforeach
            </select></i>  
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

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('asignacionAlumnosGrados.index') }}">Cancelar</a>
    </div>
 