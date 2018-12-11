@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-7 col-md-offset-2">
      <h3 style="text-align: center"> DATOS DEL ALUMNO </h3>
      <br>
      {{ Form::open(['route'=>'alumnos.alta', 'method'=>'POST']) }}
        
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

      {{ form::close() }}
    </div>
  </div>
@endsection
