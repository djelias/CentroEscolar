@extends('layouts.app')
@section('content')
  <div class="row">
    	<h3> ACTUALIZACION DE CALIFICACIONES</h3>
    	<br>
      {{ Form::model($examenes,['route'=>['examenes.update',$examenes->id],'method'=>'PATCH']) }}
      @include('examenes.form_master')
      {{ Form::close() }}
  </div>
@endsection