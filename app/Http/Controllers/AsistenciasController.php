<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Alumnos;
use App\AsignacionAlumnosGrados;
use App\Asignaciones;
use App\Docentes;
use App\Grados;
use App\Asistencias;
use Asistencias1\http\Request\AsistenciasRequest;
use DB;



class AsistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$registros = Record::with('alumnos', 'grados')->orderBy('id', 'ASC')->paginate(20);

      //$registros =Record::search($request->idgrado)->orderBy('id', 'ASC')->paginate(10);
      //$idgrado="Cuarto A";

      //$asistencias = Asignaciones::with('docentes', 'grados')->orderBy('id', 'ASC')->paginate(250);

    $asignaciones = Asignaciones::with('docentes','grados')->orderBy('id', 'ASC')->paginate(10);
      return view('asistencias.index')->with('asignaciones',$asignaciones)->with('asignaciones', $asignaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {
       $asignaciones = Asignaciones::all();
       $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
      return view('asistencias.create',compact('asignaciones','asignacionAlumnosGrados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        foreach ($request->get('estado') as $key => $value) {
            $asistencias = new Asistencias;
            $asistencias->id_asig_alum_gr = $request->get('id_asig_alum_gr')[$key];
            $asistencias->estado = $value;
            $asistencias->fecha = $request->get('fecha');            
            $asistencias->save();

}
        return redirect()->route('asistencias.index');
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

    public function modificar($id)    {
        /**
        $identificador = Grados::find($id);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        //$grados = Grados::orderBy('id','ASC')->pluck('nombre','id');
        $asistencias = Asistencias::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('asistencias.modificar')->with('identificador',$identificador)->with('asistencias',$asistencias)->with('alumnos',$alumnos);
        */

        $asistencias = Asistencias::find($id);
        return view('asistencias.modificar',compact('asistencias'));
    }

        public function detalle(Request $request, $id)
    {
        $fecha =$request->get('fecha');
        $asistencias = Asistencias::orderBy('id','DESC')->nombre($fecha)->paginate(50);
        $identificador = Grados::find($id);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        //$grados = Grados::orderBy('id','ASC')->pluck('nombre','id');
        //$asistencias = Asistencias::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('asistencias.detalle')->with('identificador',$identificador)->with('asistencias',$asistencias)->with('alumnos',$alumnos);

    }
 
}
