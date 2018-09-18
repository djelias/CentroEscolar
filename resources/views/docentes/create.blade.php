@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> DATOS DEL DOCENTE</h2>
    	<br>
      {{ Form::open(['route'=>'docentes.store', 'method'=>'POST']) }}
        @include('docentes.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection
