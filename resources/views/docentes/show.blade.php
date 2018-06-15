@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Datos del docente: </h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombres : </strong>
            {{ $docente->nombres}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellidos : </strong>
            {{ $docente->apellidos}}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numero de DUI: </strong>
            {{ $docente->no_dui}}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numero de Escalafon : </strong>
            {{ $docente->no_escalafon}}
        </div>
    </div>

            <br/>
            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
    </div>

@endsection
