@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
    	<h3 style="text-align: center"> ASISTENCIA </h3>
    	<br>
      {{ Form::open(['route'=>'asistencias.store', 'method'=>'POST']) }}
        @include('asistencias.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection