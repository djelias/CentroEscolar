@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align: center;"> DATOS DE GRADO </h3>
    	<br>
      {{ Form::open(['route'=>'grados.store', 'method'=>'POST']) }}
        @include('grados.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection