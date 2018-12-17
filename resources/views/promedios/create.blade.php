@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h3 style="text-align:center"> DATOS DEL DOCENTE</h3>
    	<br>
      {{ Form::open(['route'=>'promedios.store', 'method'=>'POST']) }}
        @include('promedios.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection
