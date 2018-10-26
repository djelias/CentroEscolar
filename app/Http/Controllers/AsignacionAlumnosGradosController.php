<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\AsignacionAlumnosGrados;
use App\Asignaciones;
use App\Alumnos;
use App\Grados;
use asignacionAlumnosGrados1\http\Request\AsignacionAlumnosGradosRequest;

class AsignacionAlumnosGradosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grados = Grados::all();
        $alumnos = Alumnos::all();
        $nombre =$request->get('nombre');
        $asignacionAlumnosGrados = AsignacionAlumnosGrados::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('asignacionAlumnosGrados.index',compact('asignacionAlumnosGrados','grados','alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados = Grados::all();
        $alumnos = Alumnos::all();
        return view('asignacionAlumnosGrados.create', compact('grados','alumnos'));
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
          'id_grado'=>'required|numeric',  
          'id_alumno'=>'required|numeric',
          ]);
        try {
            AsignacionAlumnosGrados::create($request->all());
        return redirect()->route('asignacionAlumnosGrados.index')->with('success','Asignacion guardada con éxito');
        } catch (\Illuminate\Database\QueryException $e) {
        return redirect()->route('asignaciones.index')->with('danger','No se Puede agregar alumno duplicado ');
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignacionAlumnoGrado = AsignacionAlumnosGrados::find($id);
      return view('asignacionAlumnosGrados.show',compact('asignacionAlumnoGrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grados = Grados::all();
        $alumnos = Alumnos::all();
        $asignacionAlumnoGrado = AsignacionAlumnosGrados::find($id);
        return view('asignacionAlumnosGrados.edit',compact('asignacionAlumnoGrado','grados','alumnos'));
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
          'id_asignacion'=>'required|numeric',  
          'id_grado'=>'required|numeric',
          ]);
        AsignacionAlumnosGrados::find($id)->update($request->all());
        return redirect()->route('asignacionAlumnosGrados.index')->with('success','Asignacion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
             AsignacionAlumnosGrados::find($id)->delete();
        return redirect()->route('asignacionAlumnosGrados.index')->with('success','Asignacion eliminada con exito');
    }catch (\Illuminate\Database\QueryException $e) {
        return redirect()->route('asignacionAlumnosGrados.index')->with('danger','No se Puede eliminar este registro porque esta asociado con otra asignación');
    }
       
    }
}
 