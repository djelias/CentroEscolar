     <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 form-group">
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" placeholder="Fecha ...">
        </div>
    </div>

   <table class="table table-striped" style="text-align:center" >
     <thead>
                <th>Alumno</th>
                <th>Asistencia</th>
                </thead>
                @foreach($asignacionAlumnosGrados as $reg)
                    <tr><input type="hidden" name="id_asig_alum_gr[]" value="{{$reg->id}}">
                        <td>{{$reg->Alumnos->nombre}}</td>
                        <td>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-group">
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

                @endforeach
  </table>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('asistencias.index') }}">Cancelar</a>
    </div>