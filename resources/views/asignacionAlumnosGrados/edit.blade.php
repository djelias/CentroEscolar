@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> ACTUALIZACION DE ASIGNACION ALUMNO A GRADO</h2>
    	<br>
      {{ Form::model($asignacionAlumnoGrado,['route'=>['asignacionAlumnosGrados.update',$asignacionAlumnoGrado->id],'method'=>'PATCH']) }}
      @include('asignacionAlumnosGrados.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection