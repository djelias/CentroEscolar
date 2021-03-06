@extends ('layouts.app')
@section('content')
  <div class="row">
    <div class ="col-sm-12">
      <div class="full.right">
      <h2>GESTION DE ALUMNOS</h2>
      <br>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
   @if ($message = Session::get('danger'))
      <div class="alert alert-danger">
          <p>{{ $message }}</p>
      </div>
  @endif
      <div>
        
        {!! Form::open(['route'=>'alumnos.index', 'method'=>'GET', 'class'=>'navbar-form pull-right', 'role'=>'search'])!!}
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
      <th style="text-align:center">Nombre</th>
      <th style="text-align:center">NIE</th>
      <th style="text-align:center">F Nacimiento</th>
      <th style="text-align:center">Edad</th>
      <th style="text-align:center">Accion</th>
    </tr>
    <?php $no=1; ?>
    @foreach ($alumnos as $key => $value)
    @if ($value->estado == 0)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->nombre }}</td>
        <td>{{ $value->no_nie }}</td>
        <td><?php
    $date = date_create($value->f_nacimiento);
echo date_format($date, 'd-m-Y');
    ?></td>
        <td><?php
    $cumpleanos = new DateTime($value->f_nacimiento);
    $hoy = new DateTime();
    $annos = $hoy->diff($cumpleanos);
    echo $annos->y;
    ?></td>
        
        <td>
          <a class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('alumnos.show',$value->id)}}">
              <i class="glyphicon glyphicon-list-alt"></i></a>
          <a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('alumnos.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['alumnos.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Dar de baja" style="display: inline;" class="btn btn-danger btn-lg" onclick="return confirm('¿Esta seguro que desea dar de baja este alumno?')"><i class="glyphicon glyphicon-trash" ></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
      @endif
    @endforeach
  </table>
  {!!$alumnos->render()!!}
 <div class="text-center">
    <a class="btn btn-primary" href="{{ url('/gestion') }}">Regresar</a>
  </div>
@endsection