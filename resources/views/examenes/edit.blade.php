@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3> ACTUALIZACION DE CALIFICACIONES</h3>
    	<br>
      {{ Form::model($examenes,['route'=>['examenes.update',$examenes->id],'method'=>'PATCH']) }}
      @include('examenes.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection