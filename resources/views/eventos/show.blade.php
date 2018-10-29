@extends('layouts.app')
@section('content')
<div class="row"  >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left ">
            <h3 > DATOS DEL EVENTO</h3>
            <br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre : </strong>
            {{ $evento->nombre}}
        </div>
    </div>
  
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha : </strong>
            {{ $evento->fecha}}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripcion : </strong>
            {{ $evento->descripcion}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>lugar : </strong>
            {{ $evento->lugar}}
        </div>
    </div>
  
    </div>
            <br/>
            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
    </div>

@endsection
