@extends('layouts.app')
@section('content')
  <div class="row">
    	<h3> INGRESO DE CALIFICACIONES</h3>
    	<br>
      {{ Form::model($identificador,['route'=>['examenes.store'],'method'=>'POST']) }}
      @include('examenes.form_master')
      {{ Form::close() }}
  </div>
@endsection