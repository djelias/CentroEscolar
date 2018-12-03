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

    $asignaciones = Asignaciones::all();
    $nombre = $request->get('nombre');
    $asistencias = Asignaciones::orderBy('id', 'DESC')->nombre($nombre)->paginate(10);
      return view('asistencias.index',compact('asistencias','asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {
       $asignaciones = Asignaciones::all();
       $asistencias = Asistencias::all();
       $asignacionAlumnosGrados = AsignacionAlumnosGrados::all();
      return view('asistencias.create',compact('asignaciones','asistencias','asignacionAlumnosGrados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[

           'id_asig_alum_gr',
          'estado',
          'fecha',
        ]);
        
        Asistencias::create($request->all());
        return redirect()->route('asistencias.index')->with('success','Asistencia guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idgrado)
    {

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
        //
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
