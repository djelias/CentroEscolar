@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align:center"> EDICION DE LA ASISTENCIA </h3>
    	<br>
      {{ Form::model($asistencias,['route'=>['asistencias.update',$asistencias->id],'method'=>'PATCH']) }}
      
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <?php
                 $date = date_create($asistencias->fecha);
                 echo date_format($date, 'd-m-Y');
                 ?>
        </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {{ $asistencias->AsignacionAlumnosGrados->Alumnos->nombre}}
        </div>
    </div>
<br>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
                                <div class="form-group">
                                    <select name="estado" class="form-control">
                                        <option value="A">Asistió</option>
                                        <option value="T">Tarde</option>
                                        <option value="F">Falta</option>
                                    </select>
                                </div>
                            </div>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('asistencias.index') }}">Cancelar</a>
    </div>

      {{ Form::close() }}
    </div>
  </div>
@endsection