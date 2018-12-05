@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align:center"> EDICION DE LA ASISTENCIA </h3>
    	<br>
      {{ Form::model($asistencia,['route'=>['asistencias.update',$asistencia->id],'method'=>'PATCH']) }}
      @include('asistencias.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection