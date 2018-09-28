@extends('layouts.app')

@section('content')
    <h3><small><i>Seleccione según Gestion</i></small></h3>
    <nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/gestion') }}">MENU</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Gestiones<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('docentes.index') }}">Gestión de Docentes </a></li>
          <li><a href="{{ route('alumnos.index') }}">Gestión de Estudiantes </a></li>
          <li><a href="{{ route('grados.index') }}">Gestión de Grados </a></li>
          <li><a href="{{ route('materias.index') }}">Gestión de Materias</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Asignaciones<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('asignaciones.index') }}">Grados y Docentes</a></li>
         <li><a href="{{ route('asignacionAlumnosGrados.index') }}">Alumnos y grados</a></li>
         <li><a href="{{ route('asignacionMateriasGrados.index') }}">Materias y grados</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('examenes.index') }}">Evaluaciones</a></li>
    </ul>
   </div>
 </nav>
        
        <br>
            <div class="content">
                    <h3>BIENVENIDO / A <small> al Sistema de Gestión Escolar del Centro Escolar Católico Santo Tomás</small></h3>
                </div>
                <div class="text-center">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="{{URL::asset('/img/logo.png')}}" alt="profile Pic" height="100" width="100">
                    <h4><i>"Instruye al niño en el camino que debe andar, y aun cuando sea viejo no se apartará de él"</i><br> <small>Proverbios 22,6</small></h4>
                </div>
            </div>

@endsection

