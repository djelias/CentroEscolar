<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Examenes;
use App\Alumnos;
use App\Grados;
use App\Asignaciones;
use App\Materias;
use App\Promedios;
use App\AsignacionAlumnosGrados;
use App\AsignacionMateriasGrados;
use examenes1\http\Request\ExamenesRequest;
use PDF;

class ExamenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      /** $materias = Materias::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
         
        $examenes = Examenes::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('examenes.index',compact('examenes','materias','asignacionAlumnosGrados'));*/


        $asignaciones = Asignaciones::with('docentes','grados')->orderBy('id', 'ASC')->paginate(10);
      return view('examenes.index')->with('asignaciones',$asignaciones)->with('asignaciones', $asignaciones);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $materias = Materias::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        return view('examenes.create',compact('materias','asignacionAlumnosGrados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {

       foreach ($request->get('examen1') as $key => $value) {
            $examenes = new Examenes;
            $examenes->id_asignacion_al_gr = (integer) $request->get('id_asignacion_al_gr')[$key];
            $examenes->id_materia = (integer) $request->get('id_materia');
            $examenes->examen1 = (float) $value;            
            $examenes->examen2 = (float) $request->get('examen2')[$key];            
            $examenes->examen3 = (float) $request->get('examen3')[$key];            
            $examenes->actividad1 = (float) $request->get('actividad1')[$key];            
            $examenes->actividad2 = (float) $request->get('actividad2')[$key];            
            $examenes->trimestre = (integer) $request->get('trimestre');
           // $examenes->promedio = (float) $request->get('promedio')[$key];  
            $examenes->promedio = round((((($examenes->examen1+$examenes->examen2+$examenes->examen3)/3)*0.30)+(($examenes->actividad1)*0.35)+(($examenes->actividad2)*0.35)),2);      
            $examenes->save();
}



        return redirect()->route('examenes.index')->with('success','Calificaciones  ingresadas con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**
        $materias = Materias::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        $examenes = Examenes::find($id);
      return view('examenes.show',compact('examenes','materias','asignacionAlumnosGrados'));
      */
      $materias = Materias::all();
      $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
      $examenes = Examenes::find($id);
      $view = view ('examenes.show',compact('examenes','materias','asignacionAlumnosGrados'));
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('examenes.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**$materias = Materias::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        $examenes = Examenes::find($id);
        return view('examenes.edit',compact('examenes','materias','asignacionAlumnosGrados'));*/
        $materias = Materias::all();
        $identificador = Grados::find($id);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        $asignacion = AsignacionAlumnosGrados::all();
        return view('examenes.edit')->with('identificador',$identificador)->with('asignacion',$asignacion)->with('alumnos',$alumnos)->with('materias',$materias);
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
        foreach ($request->get('examen1') as $key => $value) {
            $examenes = Examenes::find($request->get('id')[$key]);
            $examenes->id_asignacion_al_gr = (integer) $request->get('id_asignacion_al_gr')[$key];
            $examenes->id_materia = (integer) $request->get('id_materia');
            $examenes->examen1 = (float) $value;            
            $examenes->examen2 = (float) $request->get('examen2')[$key];            
            $examenes->examen3 = (float) $request->get('examen3')[$key];            
            $examenes->actividad1 = (float) $request->get('actividad1')[$key];            
            $examenes->actividad2 = (float) $request->get('actividad2')[$key];            
            $examenes->trimestre = (integer) $request->get('trimestre');
           // $examenes->promedio = (float) $request->get('promedio')[$key];  
            $examenes->promedio = (((($examenes->examen1+$examenes->examen2+$examenes->examen3)/3)*0.30)+(($examenes->actividad1)*0.35)+(($examenes->actividad2)*0.35)) ;      
            $examenes->update();
}
        //Examenes::find($id)->update($request->all());
        return redirect()->route('examenes.index')->with('success','Examenes actualizado con exito');
        */
        $this->validate($request,[
          'examen1',
          'examen2',
          'examen3',
          'actividad1',
          'actividad2',
          
        ]);
        Examenes::find($id)->update($request->all());
        return redirect()->route('examenes.index')->with('success','Notas actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Examenes::find($id)->delete();
        return redirect()->route('examenes.index')->with('success','Examenes eliminado con exito');
    }

    public function modificar($id)    {
        /**
        $identificador = Grados::find($id);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        //$grados = Grados::orderBy('id','ASC')->pluck('nombre','id');
        $examenes = Examenes::all();
        $materias = Materias::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('examenes.modificar')->with('identificador',$identificador)->with('examenes',$examenes)->with('alumnos',$alumnos)->with('materias',$materias);*/

        $examenes = Examenes::find($id);
        return view('examenes.modificar',compact('examenes'));
    }

        public function detalle($idgrado, $idalumno)
    {
        $identificador = Grados::find($idgrado);
        $identificador2 = Alumnos::find($idalumno);
        $examenes = Examenes::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('examenes.detalle')->with('identificador',$identificador)->with('identificador2',$identificador2)->with('examenes',$examenes);

    }
/**
    public function materias($id)    {
        $identificador = Grados::find($id);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        //$grados = Grados::orderBy('id','ASC')->pluck('nombre','id');
        $asignacionMateriasGrados = AsignacionMateriasGrados::all();
        $materias = Materias::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('examenes.materias')->with('identificador',$identificador)->with('asignacionMateriasGrados',$asignacionMateriasGrados)->with('alumnos',$alumnos)->with('materias',$materias);
    }

    public function crear($grado, $materia)
    {
        $grado = Grados::find($grado);
        $materia = Materias::find($materia);
        $alumnos = Alumnos::orderBy('id','ASC')->pluck('nombre','id');
        $asignacion = AsignacionAlumnosGrados::all();
        return view('examenes.crear')->with('grado',$grado)->with('materia',$materia)->with('asignacion',$asignacion)->with('alumnos',$alumnos);
    }
 */

    public function listado(Request $request, $id)
    {
        $identificador = Grados::find($id);
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        $examenes = Examenes::all();
        //$asignacion = AsignacionAlumnosGrados::orderBy('id','ASC')->pluck('id_alumno','id_grado');
        return view('examenes.listado')->with('identificador',$identificador)->with('examenes',$examenes)->with('asignacionAlumnosGrados',$asignacionAlumnosGrados);

    }

    public function promedioFinal($idgrado, $idalumno)
    {
        $identificador = Grados::find($idgrado);
        $identificador2 = Alumnos::find($idalumno);
        $examenes = Examenes::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        $asignacionMateriasGrados = AsignacionMateriasGrados::all();
        return view('examenes.promedioFinal')->with('identificador',$identificador)->with('identificador2',$identificador2)->with('examenes',$examenes)->with('asignacionAlumnosGrados',$asignacionAlumnosGrados)->with('asignacionMateriasGrados',$asignacionMateriasGrados);

    }
}
 