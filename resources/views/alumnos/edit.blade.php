@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
    	<h3 style="text-align: center;"> ACTUALIZACION DE DATOS DEL ALUMNO </h3>
    	<br>
      {{ Form::model($alumno,['route'=>['alumnos.update',$alumno->id],'method'=>'PATCH']) }}
      @include('alumnos.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection