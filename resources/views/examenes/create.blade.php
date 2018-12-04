@extends('layouts.app')
@section('content')
  <div class="row">
    	 <div>
   <h3 style="text-align: center;"> CENTRO ESCOLAR CATOLICO SANTO TOMAS</h3>
   <h4 style="text-align: center;"> Cuadro de Rendimiento Academico</h4>
 </div>
    	<br>
      {{ Form::open(['route'=>'examenes.store', 'method'=>'POST']) }}
        @include('examenes.form_master')
      {{ form::close() }}
    </div>
@endsection

