@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> ACTUALIZACION DE ASIGNACION MATERIA A GRADO </h2>
    	<br>
      {{ Form::model($asignacionGradoMateria,['route'=>['asignacionGradosMaterias.update',$asignacionGradoMateria->id],'method'=>'PATCH']) }}
      @include('asignacionGradosMaterias.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection