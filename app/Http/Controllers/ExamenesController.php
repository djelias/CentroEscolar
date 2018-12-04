<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Examenes;
use App\Materias;
use App\AsignacionAlumnosGrados;
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
        $materias = Materias::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        $nombre =$request->get('nombre');
        $examenes = Examenes::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('examenes.index',compact('examenes','materias','asignacionAlumnosGrados'));
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
            $examenes->id_materia = (integer) $request->get('id_materia')[$key];
            $examenes->examen1 = (float) $value;            
            $examenes->examen2 = (float) $request->get('examen2')[$key];            
            $examenes->examen3 = (float) $request->get('examen3')[$key];            
            $examenes->actividad1 = (float) $request->get('actividad1')[$key];            
            $examenes->actividad2 = (float) $request->get('actividad2')[$key];            
            $examenes->trimestre = (integer) $request->get('trimestre');
            $examenes->promedio = (float) $request->get('promedio')[$key];           
            $examenes->save();
}
/**
        $this->validate($request,[
          'id_asignacion_al_gr' => 'required|numeric',
          'id_materia' => 'required|numeric',
          'examen1' => 'required|numeric|min:1|max:10',
          'examen2' => 'required|numeric|min:1|max:10',
          'examen3' => 'required|numeric|min:1|max:10',
          'actividad1'=>'required|numeric|min:1|max:10',
          'actividad2'=>'required|numeric|min:1|max:10',
          'trimestre'=>'required|numeric|min:1|max:10',
          'promedio'=>'required|numeric|min:1|max:10',
        ]);
        
        Examenes::create($request->all());*/
        return redirect()->route('examenes.index')->with('success','Examenes guardado con éxito');
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
        $materias = Materias::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        $examenes = Examenes::find($id);
        return view('examenes.edit',compact('examenes','materias','asignacionAlumnosGrados'));
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
        $this->validate($request,[
          'id_asignacion_al_gr' => 'required|numeric',
          'id_materia' => 'required|numeric',
          'examen1' => 'required|numeric',
          'examen2' => 'required|numeric',
          'examen3' => 'required|numeric',
          'actividad1'=>'required|numeric',
          'actividad2'=>'required|numeric',
          'trimestre'=>'required|numeric',
          'promedio'=>'required|numeric',
        ]);
        Examenes::find($id)->update($request->all());
        return redirect()->route('examenes.index')->with('success','Examenes actualizado con exito');
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
}
 