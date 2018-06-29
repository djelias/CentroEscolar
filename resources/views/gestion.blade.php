@extends('layouts.app')

@section('content')
    <h3>MENU <small><i>Seleccione según Gestion</i></small></h3>
        <nav class="navbar navbar-static-top navbar-inverse" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <ul class="nav navbar-nav">
                    <li><a href="{{ route('docentes.index') }}">Docentes /</a></li>
                    <li><a href="{{ route('docentes.index') }}"> Estudiantes /</a></li>
                    <li><a href="{{ route('grados.index') }}">Grados </a></li>
                     </ul>
                </div>
            </div>
        </nav>
            <div class="content">
                    <h3>BIENVENIDO/A <small> al Sistema de Gestión Escolar del Centro Escolar Católico Santo Tomás</small></h3>
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

