@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> ASIGNACION DE MATERIAS A GRADOS</h2>
    	<br>
      {{ Form::open(['route'=>'asignacionMateriasGrados.store', 'method'=>'POST']) }}
        @include('asignacionMateriasGrados.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection