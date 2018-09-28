@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align: center"> INGRESO DE CALIFICACIONES </h3>
    	<br>
      {{ Form::open(['route'=>'examenes.store', 'method'=>'POST']) }}
        @include('examenes.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection
