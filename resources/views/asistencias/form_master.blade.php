
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-group">
        <div class="form-group">
            <label for="fecha"></label>
            <input type="date" name="fecha" class="form-control" placeholder="Fecha ...">
        </div>
    </div>

   <table class="table table-striped" style="text-align:center" >
     <thead>
                <th>Alumno</th>
                <th>Asistencia</th>
                </thead>
                <?php $fechaActual = date("Y"); ?>
                @foreach($asignacion as $registro)
                @if($registro->Grados->id == $identificador->id)
                @if($registro->anio == $fechaActual)
                    <tr><input type="hidden" name="id_asig_alum_gr[]" value="{{$registro->id}}">
                        <td>{{$registro->Alumnos->nombre}}</td>
                        <td>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 form-group">
                                <div class="form-group">
                                    <select name="estado[]" class="form-control">
                                        <option value="A">Asistió</option>
                                        <option value="T">Tarde</option>
                                        <option value="F">Falta</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endif
                @endforeach
  </table>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('asistencias.index') }}">Cancelar</a>
    </div>