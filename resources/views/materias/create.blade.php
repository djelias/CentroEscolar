@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2> Ingreso de Materias: </h2>
    	<br>
      {{ Form::open(['route'=>'materias.store', 'method'=>'POST']) }}
        @include('materias.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection