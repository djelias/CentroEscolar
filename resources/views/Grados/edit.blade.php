@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align: center"> ACTUALIZACION DE DATOS DEL GRADO </h3>
    	<br>
      {{ Form::model($grado,['route'=>['grados.update',$grado->id],'method'=>'PATCH']) }}
      @include('grados.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection