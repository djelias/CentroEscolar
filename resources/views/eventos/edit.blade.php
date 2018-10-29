@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align:center"> ACTUALIZACION DE DATOS DEL EVENTO</h3>
    	<br>
      {{ Form::model($evento,['route'=>['eventos.update',$evento->id],'method'=>'PATCH']) }}
      @include('eventos.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection