@extends('layouts.app')
@section('content')
<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left ">
            <h3 > DATOS DEL ALUMNO</h3>
            <br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre : </strong>
            {{ $alumno->nombre}}
        </div>
    </div>
</div>

<div class="row">        
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Número de NIE : </strong>
            {{ $alumno->no_nie}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha de Nacimiento : </strong>
            {{ $alumno->f_nacimiento}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            
            <strong>Edad : </strong>
            <?php
            $cumpleanos = new DateTime($alumno->f_nacimiento);
            $hoy = new DateTime();
            $annos = $hoy->diff($cumpleanos);
            echo $annos->y;
            ?>
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Direccion : </strong>
            {{ $alumno->direccion}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefono : </strong>
            {{ $alumno->telefono}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Enfermedades : </strong>
            {{ $alumno->enfermedades}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Mama : </strong>
            {{ $alumno->nombre_madre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>DUI : </strong>
            {{ $alumno->dui_madre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ocupacion : </strong>
            {{ $alumno->ocupacion_madre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefono : </strong>
            {{ $alumno->telefono_madre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Papa : </strong>
            {{ $alumno->nombre_padre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>DUI : </strong>
            {{ $alumno->dui_padre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ocupacion : </strong>
            {{ $alumno->ocupacion_padre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefono : </strong>
            {{ $alumno->telefono_padre}}
        </div>
    </div>
</div>

<div class="row">             
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Observaciones : </strong>
            {{ $alumno->observaciones}}
        </div>
    </div>
</div>
            <br/>
            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
    </div>

@endsection
