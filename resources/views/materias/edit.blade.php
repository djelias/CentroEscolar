@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3> ACTUALIZACION DE DATOS DE MATERIA </h3>
    	<br>
      {{ Form::model($materia,['route'=>['materias.update',$materia->id],'method'=>'PATCH']) }}
      @include('materias.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection