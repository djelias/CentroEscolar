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
      <th with="80px"></th>
      <th style="text-align:center">Reportes por grado</th>
      <th style="text-align:center"><a class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('reportes.grados')}}">
              <i class="glyphicon glyphicon-list-alt"></i></a></th>
    </tr>
    <tr>
        <th style="text-align:center">Reportes por grado</th>
        <th style="text-align:center"><a class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('reportes.alumnos')}}">
              <i class="glyphicon glyphicon-list-alt"></i></a></th>
    </tr>
  </table>
  {!!$examenes->render()!!}
 <div class="text-center">
    <a class="btn btn-primary" href="{{ url('/gestion') }}">Regresar</a>
  </div>
@endsection