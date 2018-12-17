@extends ('layouts.app')
@section('content')
  <div class="row">
    <div class ="col-sm-12">
      <div class="full.right">
      <h2>EVALUACIONES</h2>
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
      <th style="text-align:center">Docente</th>
      <th style="text-align:center">Grado</th>
      <th style="text-align:center">Acciones</th>
    </tr>
     <?php $fechaActual = date("Y"); ?>
    <?php $no=1; ?>
    @foreach ($asignaciones as $value)
    @if($value->Docentes->User->name == Auth::user()->name)
    @if($value->anio == $fechaActual)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$value->Docentes->User->name }}</td>
        <td>{{$value->Grados->nombre }} {{$value->Grados->seccion }}</td>
        <td>
          <a class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Ver" href="{{route('examenes.listado',$value->Grados->id)}}">
              <i class="glyphicon glyphicon-list-alt"></i></a>
          <a class=" btn btn-success btn-lg" data-toggle="tooltip" data-placement="top" title="Crear" href="{{route('examenes.edit',$value->Grados->id)}}">
              <i class="glyphicon glyphicon-plus"></i></a>
        
        </td>
      </tr>
      @endif
      @endif
      @endforeach
 
  </table>
  {!!$asignaciones->render()!!}
 <div class="text-center">
    <a class="btn btn-primary" href="{{ url('/gestion') }}">Regresar</a>
  </div>


@endsection