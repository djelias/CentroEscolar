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
  <table style="width:100%">
    <tr>
      <td style="text-align:center">Reportes por grados</td>
      <td><a class="btn btn-primary" href="{{ url('/gestion') }}">Reportes</a></td>
    </tr>
    <tr>
      <td style="text-align:center">Reportes por alumnos</td>
      
      <td><a class="btn btn-primary" href="{{ url('/gestion') }}">Reportes</a></td>
    </tr>
  </table>
 <div class="text-center">
    <a class="btn btn-primary" href="{{ url('/gestion') }}">Regresar</a>
  </div>
@endsection