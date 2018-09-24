<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Notas;
use notas1\http\Request\NotasRequest;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre =$request->get('nombre');
        $notas = Notas::orderBy('id','ASC')->nombre($nombre)->paginate(10);
        return view('notas.index',compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('notas.create');
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
          'nombre' => 'required|alpha_spaces',
          'ponderacion'=>'required|numeric',
          'nota'=>'required|numeric',
        ]);
        
        Notas::create($request->all());
        return redirect()->route('notas.index')->with('success','Nota guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = Notas::find($id);
      return view('notas.show',compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Notas::find($id);
        return view('notas.edit',compact('nota'));
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
          'nombre' => 'required|alpha_spaces',
          'ponderacion'=>'required|numeric',
          'nota'=>'required|numeric',
        ]);
        Notas::find($id)->update($request->all());
        return redirect()->route('notas.index')->with('success','Nota actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notas::find($id)->delete();
        return redirect()->route('notas.index')->with('success','Nota eliminado con exito');
    }
}
 