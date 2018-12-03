<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Examenes;
use App\Materias;
use App\Asignacioness;
use App\AsignacionAlumnosGrados;
use App\AsignacionMateriasGrados;
use PDF;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $materias = Materias::all();
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
        $nombre =$request->get('nombre');
        $examenes = Examenes::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('reportes.index',compact('examenes','materias','asignacionAlumnosGrados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

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
    public function edit($id) {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

    }

        public function grados()    {
        
        return view('reportes.grados');
    }

        public function alumnos()    {

    }
}
 