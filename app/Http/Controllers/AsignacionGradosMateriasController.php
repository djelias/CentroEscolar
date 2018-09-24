<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\AsignacionGradosMaterias;
use App\Grados;
use App\Materias;
use asignacionGradosMaterias1\http\Request\AsignacionGradosMateriasRequest;

class AsignacionGradosMateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grados = Grados::all();
        $materias = Materias::all();
        $nombre =$request->get('nombre');
        $asignacionGradosMaterias = AsignacionGradosMaterias::orderBy('id','ASC')->nombre($nombre)->paginate(10);
        return view('asignacionGradosMaterias.index',compact('asignacionGradosMaterias','grados','materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados = Grados::all();
        $materias = Materias::all();
        return view('asignacionGradosMaterias.create', compact('grados','materias'));
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
          'id_materia'=>'required|numeric',
        ]);
        AsignacionGradosMaterias::create($request->all());
        return redirect()->route('asignacionGradosMaterias.index')->with('success','Asignacion guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignacionGradoMateria = AsignacionGradosMaterias::find($id);
      return view('asignacionGradosMaterias.show',compact('asignacionGradoMateria'));
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
        $materias = Materias::all();
        $asignacionGradoMateria = AsignacionGradosMaterias::find($id);
        return view('asignacionGradosMaterias.edit',compact('asignacionGradoMateria','grados','materias'));
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
          'id_grado'=>'required|numeric',
          'id_materia'=>'required|numeric',
        ]);
        AsignacionGradosMaterias::find($id)->update($request->all());
        return redirect()->route('asignacionGradosMaterias.index')->with('success','Asignacion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AsignacionGradosMaterias::find($id)->delete();
        return redirect()->route('asignacionGradosMaterias.index')->with('success','Asignacion eliminada con exito');
    }
}
 