@extends ('layouts.app')
@section('content')
  <div class="row">
    <div class ="col-sm-12">
      <div class="full.right">
      <h2>GESTION DE EVALUACIONES</h2>
      <br>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
      <div>
        <a href="{{route('examenes.create')}}" class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-plus"> NUEVO</i>
        </a>
        {!! Form::open(['route'=>'examenes.index', 'method'=>'GET', 'class'=>'navbar-form pull-right', 'role'=>'search'])!!}
        <div class="input-group"> 
            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Buscar'])!!}
        </div>
         <button type="submit" class="glyphicon glyphicon-search btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar"></button>
        {!! Form::close()!!}
      </div>
      <br>
  
        
  <table class="table table-striped" style="text-align:center" >
    <tr>
      <th with="80px">No</th>
      <th style="text-align:center">Alumno</th>
      <th style="text-align:center">Materia</th>
      <th style="text-align:center">Examen 1</th>
      <th style="text-align:center">Examen 2</th>
      <th style="text-align:center">Examen 3</th>
      <th style="text-align:center">Actividad 1</th>
      <th style="text-align:center">Actividad 2</th>
      <th style="text-align:center">Periodo</th>
      <th style="text-align:center">Promedio</th>
      <th style="text-align:center">Accion</th>
    </tr>
    <?php $no=1; ?>
    

    @foreach ($examenes as $key => $value)
    <tr>
        <td style="text-align:center">{{$no++}}</td>
        <td style="text-align:center">{{ $value->AsignacionAlumnosGrados->Alumnos->nombre }}</td>
        <td style="text-align:center">{{ $value->Materias->nombre }}</td>
        <td style="text-align:center">{{ $value->examen1 }}</td>
        <td style="text-align:center">{{ $value->examen2 }}</td>
        <td style="text-align:center">{{ $value->examen3 }}</td>
        <td style="text-align:center">{{ $value->actividad1 }}</td>
        <td style="text-align:center">{{ $value->actividad2 }}</td>
        <td style="text-align:center">{{ $value->trimestre }}</td>
        <td style="text-align:center">{{ $value->promedio }}</td>
        <td>
          <a class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('examenes.show', $parameters = $value->id)}}">
              <i class="glyphicon glyphicon-list-alt"></i></a>
          <a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('examenes.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            <!--{!! Form::open(['method' => 'DELETE','route' => ['examenes.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger btn-lg" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
            {!! Form::close() !!}-->
        </td>
      </tr>
      <label>{{$value->filtro}}</label>
    @endforeach
 
  </table>
  {!!$examenes->render()!!}
 <div class="text-center">
    <a class="btn btn-primary" href="{{ url('/gestion') }}">Regresar</a>
  </div>


@endsection