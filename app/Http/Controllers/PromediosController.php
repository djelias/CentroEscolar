<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\AsignacionMateriasGrados;
use App\Asignaciones;
use App\Examenes;
use App\Promedios;
use Promedios1\http\Request\PromediosRequest;
use DB;



class PromediosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre =$request->get('nombre');
        $promedios = Promedios::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('promedios.index',compact('promedios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {
       $examenes = Examenes::all();
       $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
      return view('promedios.create',compact('examenes','asignacionAlumnosGrados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {
        $this->validate($request,[

          'id_asignaciones',
          'id_asignacionAlumnosGrados',
          'id_asignacionMateriasGrados',
          'id_examenes',
          'trimestre1',
          'trimestre2',
          'trimestre3',
          'prom_final',
            'anio'
        ]);
        
        Promedios::create($request->all());
        return redirect()->route('promedios.index')->with('success','Promedio guardado con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $identificador = Grados::find($id);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        //$grados = Grados::orderBy('id','ASC')->pluck('nombre','id');
        $asistencias = Asistencias::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('asistencias.show')->with('identificador',$identificador)->with('asistencias',$asistencias)->with('alumnos',$alumnos);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        $identificador = Grados::find($id);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        //$grados = Grados::orderBy('id','ASC')->pluck('nombre','id');
        $asignacion = AsignacionAlumnosGrados::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('asistencias.edit')->with('identificador',$identificador)->with('asignacion',$asignacion)->with('alumnos',$alumnos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
        foreach ($request->get('estado') as $key => $value) {
            $asistencias = Asistencias::find($request->get('id')[$key]);
            //$asistencias = new Asistencias;
            $asistencias->id_asig_alum_gr = $request->get('id_asig_alum_gr')[$key];
            $asistencias->estado = $value;
            $asistencias->fecha = $request->get('fecha');            
            $asistencias->update();
        }
        //Asistencias::find($id)->update($request->all());
        return redirect()->route('asistencias.index');*/

        $this->validate($request,[
          'estado',
        ]);
        Asistencias::find($id)->update($request->all());
        return redirect()->route('asistencias.index')->with('success','Asistencia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
}
