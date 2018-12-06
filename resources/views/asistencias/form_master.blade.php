
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 form-group">
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
                @foreach($asignacion as $registro)
                @if($registro->Grados->id == $identificador->id)
                    <tr><input type="hidden" name="id_asig_alum_gr[]" value="{{$registro->id}}">
                        <td>{{$registro->Alumnos->nombre}}</td>
                        <td>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
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
                @endforeach
  </table>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('asistencias.index') }}">Cancelar</a>
    </div>