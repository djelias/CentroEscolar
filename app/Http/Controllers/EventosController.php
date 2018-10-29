<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Eventoss;
use eventos1\http\Request\EventosRequest;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre =$request->get('nombre');
        $eventos = Eventos::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('eventos.create');
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

          'nombre' => 'required',
          'fecha'=>'required',
          'descripcion'=>'required',
          'lugar'=>'required',
        ]);
        
        Eventos::create($request->all());
        return redirect()->route('eventos.index')->with('success','Evento guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Eventos::find($id);
      return view('eventos.show',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Eventos::find($id);
        return view('eventos.edit',compact('evento'));
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
          'nombre' => 'required',
          'fecha'=>'required',
          'descripcion'=>'required',
          'lugar'=>'required',
        ]);
        Eventos::find($id)->update($request->all());
        return redirect()->route('eventos.index')->with('success','Evento actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Eventos::find($id)->delete();
        return redirect()->route('eventos.index')->with('success','Evento eliminado con exito');
    }
}
 