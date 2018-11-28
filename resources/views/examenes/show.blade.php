@extends('layouts.app')
@section('content')
<br>
<br>
<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left ">
            <h3 > EVALUACIONES</h3>
            <br>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Examen 1 : </strong>
            {{ $examenes->examen1}}
        </div>
    </div>
<br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Examen 2 : </strong>
            {{ $examenes->examen2}}
        </div>
    </div>
<br>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Examen 3 : </strong>
            {{ $examenes->examen3}}
        </div>
    </div>
<br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Actividad 1 : </strong>
            {{ $examenes->actividad1}}
        </div>
    </div>
<br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Actividad 2 : </strong>
            {{ $examenes->actividad2}}
        </div>
    </div>
<br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Trimestre : </strong>
            {{ $examenes->trimestre}} Periodo
        </div>
    </div>
<br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PROMEDIO : </strong>
            {{ $examenes->promedio}}
        </div>
    </div>
<br>
            <br/>
            <a class="btn btn-primary" href="{{ route('examenes.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
</div>

@endsection