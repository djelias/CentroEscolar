@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2> Actualización de Datos: </h2>
    	<br>
      {{ Form::model($grado,['route'=>['grados.update',$grado->id],'method'=>'PATCH']) }}
      @include('grados.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection