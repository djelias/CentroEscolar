   <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre','Nombre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre',NULL, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Nombre completo del alumno...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('no_nie','Numero de NIE') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_nie') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_nie',NULL, ['class'=>'form-control', 'id'=>'no_nie', 'placeholder'=>'xxxxxxx','maxlength' => 7]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_nie', '**Ingrese NIE correctamente') }}</strong>
      </div>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('f_nacimiento','Fecha de nacimiento') !!}
    </div>
    <div class="col-sm-5">
      <div class="input-group {{ $errors->has('f_nacimiento') ? 'has-error' : "" }}">
       <i>{{ Form::text('f_nacimiento',NULL, ['class'=>'form-control', 'id'=>'f_nacimiento','type'=>'text', 'placeholder'=>'Fecha(yyyy-mm-dd)']) }} </i>
               <div class="help-block"> 
          <strong>{{ $errors->first('f_nacimiento', '**Ingrese la Fecha correctamente') }}</strong>
      </div>
    </div>
  </div>
  </div>


  <div class="row">
    <div class="col-sm-2">
      {!! form::label('direccion','Direccion') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group">
        <i>{{ Form::textarea('direccion',NULL, ['class'=>'form-control', 'id'=>'direccion', 'placeholder'=>'Direccion del alumno...']) }}</i>
      </div>
    </div>
    </div>


  <div class="row">
    <div class="col-sm-2">
      {!! form::label('telefono','Telefono') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('telefono') ? 'has-error' : "" }}">
        <i>{{ Form::text('telefono',NULL, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'Telefono de contacto...']) }}</i>
        <div class="help-block" >
        <strong>{{ $errors->first('telefono', '**Ingrese datos válidos A-Z') }}</strong> 
      </div>
      </div>
    </div>
    </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('repite_grado','Repite grado') !!}
    </div>
    <div class="col-sm-10">
    <div class="form-group">
        <i>{{ Form::checkbox('repite_grado', '1') }}</i>
      </div>
    </div>
    </div>
    

    <div class="row">
    <div class="col-sm-2">
    <div class="form-group">

      {!! form::label('estudio_parvularia','Estudio parvularia') !!}
    </div>
    <div class="col-sm-10">
        <i>{{ Form::checkbox('estudio_parvularia', '1') }}</i>
      </div>
    </div>
    </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('enfermedades','Enfermedades') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('enfermedades') ? 'has-error' : "" }}">
        <i>{{ Form::text('enfermedades',NULL, ['class'=>'form-control', 'id'=>'enfermedades', 'placeholder'=>'Enfermedades del alumno...']) }}</i>
      </div>
    </div>
    </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre_madre','Nombre de la madre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre_madre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre_madre',NULL, ['class'=>'form-control', 'id'=>'nombre_madre', 'placeholder'=>'Nombre completo de la madre...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre_madre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-2">
      {!! form::label('dui_madre','No. de DUI') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('dui_madre') ? 'has-error' : "" }}">
       <i>{{ Form::text('dui_madre',NULL, ['class'=>'form-control','id'=>'dui_madre','placeholder'=>'xxxxxxxx-x','maxlength' => 10]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('dui_madre', 'Ingrese DUI correctamente') }}</strong>
      </div>
    </div>
  </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('ocupacion_madre','Ocupacion') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('ocupacion_madre') ? 'has-error' : "" }}">
       <i>{{ Form::text('ocupacion_madre',NULL, ['class'=>'form-control', 'id'=>'ocupacion_madre', 'placeholder'=>'Ocupacion de la madre...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('ocupacion_madre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>  

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('telefono_madre','Telefono de la madre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('telefono_madre') ? 'has-error' : "" }}">
        <i>{{ Form::text('telefono_madre',NULL, ['class'=>'form-control', 'id'=>'telefono_madre', 'placeholder'=>'Telefono de la madre...']) }}</i>
        <div class="help-block" >
        <strong>{{ $errors->first('telefono_madre', '**Ingrese datos válidos A-Z') }}</strong> 
      </div>
      </div>
    </div>
    </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre_padre','Nombre del padre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre_padre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre_padre',NULL, ['class'=>'form-control', 'id'=>'nombre_padre', 'placeholder'=>'Nombre completo del padre...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre_padre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-2">
      {!! form::label('dui_padre','No. de DUI') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('dui_padre') ? 'has-error' : "" }}">
       <i>{{ Form::text('dui_padre',NULL, ['class'=>'form-control','id'=>'dui_padre','placeholder'=>'xxxxxxxx-x','maxlength' => 10]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('dui_padre', 'Ingrese DUI correctamente') }}</strong>
      </div>
    </div>
  </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('ocupacion_padre','Ocupacion') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('ocupacion_padre') ? 'has-error' : "" }}">
       <i>{{ Form::text('ocupacion_padre',NULL, ['class'=>'form-control', 'id'=>'ocupacion_padre', 'placeholder'=>'Ocupacion del padre...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre_padre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>  

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('telefono_padre','Telefono del padre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('telefono_padre') ? 'has-error' : "" }}">
        <i>{{ Form::text('telefono_padre',NULL, ['class'=>'form-control', 'id'=>'telefono_padre', 'placeholder'=>'Telefono del padre...']) }}</i>
        <div class="help-block" >
        <strong>{{ $errors->first('telefono_padre', '**Ingrese datos válidos A-Z') }}</strong> 
      </div>
      </div>
    </div>
    </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('vive_con','Con quien vive el niñ@') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('vive_con') ? 'has-error' : "" }}">
       <i>{{ Form::text('vive_con',NULL, ['class'=>'form-control', 'id'=>'vive_con', 'placeholder'=>'Con quien vive el niñ@...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('vive_con', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('carta_compromiso','Carta compromiso') !!}
    </div>
    <div class="col-sm-10">
    <div class="form-group">

        <i>{{ Form::checkbox('carta_compromiso', '1') }}</i>
      </div>
    </div>
    </div>

<div class="row">
    <div class="col-sm-2">
    <div class="form-group">

      {!! form::label('conducta','Carta conducta') !!}
    </div>
    <div class="col-sm-10">
        <i>{{ Form::checkbox('conducta', '1') }}</i>
      </div>
    </div>
    </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('rendimiento','Carta rendimiento') !!}
    </div>
    <div class="col-sm-10">
    <div class="form-group">

        <i>{{ Form::checkbox('rendimiento', '1') }}</i>
      </div>
    </div>
    </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('nuevo_ingreso','Nuevo ingreso') !!}
    </div>
    <div class="col-sm-10">
    <div class="form-group">

        <i>{{ Form::checkbox('nuevo_ingreso', '1') }}</i>
      </div>
    </div>
    </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('escuela_proviene','Escuela de la que proviene') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('escuela_proviene') ? 'has-error' : "" }}">
       <i>{{ Form::text('escuela_proviene',NULL, ['class'=>'form-control', 'id'=>'escuela_proviene', 'placeholder'=>'Escuela de la que proviene...']) }}</i>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('municipio','Municipio') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('municipio') ? 'has-error' : "" }}">
       <i>{{ Form::text('municipio',NULL, ['class'=>'form-control', 'id'=>'municipio', 'placeholder'=>'Municipio de la escuela...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('municipio', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('observaciones','Observaciones') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('observaciones') ? 'has-error' : "" }}">
       <i>{{ Form::textarea('observaciones',NULL, ['class'=>'form-control', 'id'=>'observaciones', 'placeholder'=>'Observaciones durante el año...']) }}</i>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('quien_inscribe','Quien inscribe al niñ@') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('quien_inscribe') ? 'has-error' : "" }}">
       <i>{{ Form::text('quien_inscribe',NULL, ['class'=>'form-control', 'id'=>'quien_inscribe', 'placeholder'=>'Quien inscribe al niñ@...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('quien_inscribe', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col-sm-2">
      {!! form::label('estado','Estado') !!}
    </div>
    <div class="col-sm-10">
    <div class="form-group">

        <i>{{ Form::checkbox('estado', '1', true) }}</i>
      </div>
    </div>
    </div>

   <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('alumnos.index') }}">Cancelar</a>
   </div>

  
 
   <!--Script para Colocar Calendario en español en fecha de nacimiento--> 
<script>
          $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '< Ant',
            nextText: 'Sig >',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            changeMonth: true,
            changeYear: true,
            yearRange: '-30:+0',
            weekHeader: 'Sm',
            dateFormat: 'yy-mm-dd',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
         };
   $.datepicker.setDefaults($.datepicker.regional['es']);
            $(function () {
            $("#f_nacimiento").datepicker();
        });
</script>