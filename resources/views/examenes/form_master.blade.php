                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-group">
                                <div class="form-group">
                                    <select name="trimestre[]" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>

 <table class="table table-striped" style="text-align:center" >
     <thead>
                <th>Alumno</th>
                <th>Examen</th>
                <th>Laboratorio</th>
                <th>Actividad cotidiana</th>
                <th>Actividad integradora 1</th>
                <th>Actividad integradora 2</th>
                <th>Promedio</th>
                </thead>
                @foreach($asignacionAlumnosGrados as $reg)
               
                <input type="hidden" name="id_asignacion_al_gr[]" value="{{$reg->id}}">
                    <tr>
                        <td>{{$reg->Alumnos->nombre}}</td>
                        <td><input type="number" name="examen1[]" class="form-control" placeholder="Nota"></td>
                        <td><input type="number" name="examen2[]" class="form-control" placeholder="Nota"></td>
                        <td><input type="number" name="examen3[]" class="form-control" placeholder="Nota"></td>
                        <td><input type="number" name="actividad1[]" class="form-control" placeholder="Nota"></td>
                        <td><input type="number" name="actividad2[]" class="form-control" placeholder="Nota"></td>

                        <td><input type="number" name="promedio[]" class="form-control" placeholder="Nota"></td>
                    </tr>

                @endforeach
  </table>

  <br>
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class=" btn btn-danger btn-lg" href="{{ route('examenes.index') }}">Cancelar</a>

<!--Script para calcular promedio a partir de las entradas de texto -->
<script>
      function Calcular() {
          var vr1 = document.getElementById('examen1').value;
          var vr2 = document.getElementById('examen2').value;
          var vr3 = document.getElementById('examen3').value;
          var vr4 = document.getElementById('actividad1').value;
          var vr5 = document.getElementById('actividad2').value;
          var p = ((((parseFloat(vr1)+parseFloat(vr2))/2)*0.30)+(parseFloat(vr3)*0.35)+((parseFloat(vr4)+parseFloat(vr5))/2)*0.35);
          document.getElementById('promedio').value = ("%.2", p);
        }
</script>
</html>
