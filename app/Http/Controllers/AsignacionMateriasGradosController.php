<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\AsignacionMateriasGrados;
use App\Asignaciones;
use App\Materias;
use App\Grados;
use asignacionMateriasGrados1\http\Request\AsignacionMateriasGradosRequest;

class AsignacionMateriasGradosController extends Controller
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
        $asignacionMateriasGrados = AsignacionMateriasGrados::orderBy('id','ASC')->nombre($nombre)->paginate(10);
        return view('asignacionMateriasGrados.index',compact('asignacionMateriasGrados','grados','materias'));
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
        return view('asignacionMateriasGrados.create', compact('grados','materias'));
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
        AsignacionMateriasGrados::create($request->all());
        return redirect()->route('asignacionMateriasGrados.index')->with('success','Asignacion guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignacionMateriaGrado = AsignacionMateriasGrados::find($id);
      return view('asignacionMateriasGrados.show',compact('asignacionMateriaGrado'));
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
        $materia = Materias::all();
        $asignacionMateriaGrado = AsignacionMateriasGrados::find($id);
        return view('asignacionMateriasGrados.edit',compact('asignacionMateriaGrado','grados','materias'));
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
          'id_materia'=>'required|numeric',  
          'id_grado'=>'required|numeric',
          ]);
        AsignacionMateriasGrados::find($id)->update($request->all());
        return redirect()->route('asignacionMateriasGrados.index')->with('success','Asignacion actualizada con exito');
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
             AsignacionMateriasGrados::find($id)->delete();
        return redirect()->route('asignacionMateriasGrados.index')->with('success','Asignacion eliminada con exito');
    }catch (\Illuminate\Database\QueryException $e) {
        return redirect()->route('asignacionMateriasGrados.index')->with('danger','No se Puede eliminar este registro porque esta asociado con otra asignación');
    }
       
    }
}