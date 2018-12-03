     <div class="row">
    <div class="col-sm-1">
      {!! form::label('fecha','Fecha') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('fecha') ? 'has-error' : "" }}">
       <i>{{ Form::date('fecha',NULL, ['class'=>'form-control', 'id'=>'fecha', 'placeholder'=>'Fecha del evento']) }} </i> 
    </div>
    </div>
   </div>

   <table class="table table-striped" style="text-align:center" >
    <tr>
      <th with="80px">No</th>
      <th style="text-align:center">Nombre</th>
      <th style="text-align:center">Asistencia</th>
    </tr>
    <?php $no=1; ?>
     @foreach($asignacionAlumnosGrados as $asignacionAlumnoGr)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $asignacionAlumnoGr->Alumnos->nombre}}
        <?php 
        $id_asig_alum_gr = $asignacionAlumnoGr->id;
         ?>
        </td>
        <td>
            <select name="estado" class="form-control">
                <option selected value="Asistio">Asistio</option>
                <option value="Tarde">Tarde</option>
                <option value="Inasistencia">Inasistencia</option>
            </select>
          </td>
      </tr>
    @endforeach
  </table>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('asistencias.index') }}">Cancelar</a>
    </div>