@extends ('layouts.app')
@section('content')
  <div class="row">
    <div class ="col-sm-12">
      <div class="full.right">
      <h2>GESTION DE DOCENTES</h2>
      <br>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
        <a href="{{route('docentes.create')}}" class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-plus"> NUEVO</i>
        </a>
        {!! Form::open(['route'=>'docentes.index', 'method'=>'GET', 'class'=>'navbar-form pull-right', 'role'=>'search'])!!}
        <div class="input-group"> 
            {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Buscar'])!!}
        </div>
         <button type="submit" class="glyphicon glyphicon-search btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar"></button>
        {!! Form::close()!!}
  <table class="table table-bordered">
    <tr>
      <th with="80px">No</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Numero de DUI</th>
      <th>Numero de Escalafón</th>
      <th>Acción</th>
    </tr>
    <?php $no=1; ?>
    @foreach ($docentes as $key => $value)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->nombres }}</td>
        <td>{{ $value->apellidos }}</td>
        <td>{{ $value->no_dui }}</td>
        <td>{{ $value->no_escalafon }}</td>
        <td>
          <a class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('docentes.show',$value->id)}}">
              <i class="glyphicon glyphicon-list-alt"></i></a>
          <a class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('docentes.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['docentes.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger btn-lg" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
@endsection


  