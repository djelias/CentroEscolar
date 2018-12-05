@extends ('layouts.app')
@section('content')
  <div class="row">
    <div class ="col-sm-12">
      <div class="full.right">
      <h2>REPORTES</h2>
      <br>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
      <br>
 <table class="table table-striped" style="text-align:center" >
    <tr>
      <th with="80px" style="text-align: center">No</th>
      <th  style="text-align: center">Nombre</th>
      <th  style="text-align: center">Accion</th>
          </tr>
    <?php $no=1; ?>
    @foreach ($asignaciones as $key => $value)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->Docentes->User->nombre }}</td>
        <td>{{ $value->Grados->nombre }}</td>
        <td>
          <a class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('materias.show',$value->id)}}">
              <i class="glyphicon glyphicon-list-alt"></i></a>
          <a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('materias.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['materias.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger btn-lg" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!!$asignaciones->render()!!}
  <div class="text-center">
    <a class="btn btn-primary" href="{{ url('/gestion') }}">Regresar</a>
  </div>
@endsection