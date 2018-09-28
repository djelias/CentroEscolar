@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align:center"> ASIGNACION DE GRADO Y DOCENTE</h3>
    	<br>
      {{ Form::open(['route'=>'asignaciones.store', 'method'=>'POST']) }}
        @include('asignaciones.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection