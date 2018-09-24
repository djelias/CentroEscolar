@extends('layouts.app')
@section('content')
<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left ">
            <h2 > Datos del Nota</h2>
            <br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre : </strong>
            {{ $nota->nombre}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ponderacion : </strong>
            {{ $nota->ponderacion}}
        </div>
    </div>
        
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nota: </strong>
            {{ $nota->nota}}
        </div>
    </div>
     
            <br/>
            <a class="btn btn-primary" href="{{ route('notas.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
    </div>

@endsection