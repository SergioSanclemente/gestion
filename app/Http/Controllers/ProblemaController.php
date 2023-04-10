<?php

namespace App\Http\Controllers;

use App\Models\Problema;
use App\Models\Cliente;
use App\Models\Plataforma;
use Illuminate\Http\Request;
use Storage;
class ProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['problemas']=Problema::with('cliente')->paginate(5);
   

        return view('problemas.index',$datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = Cliente::all();
        $plataformas = Plataforma::all();
        
        return view('problemas.create')
        ->with([
            'clientes' => $clientes,
            'plataformas' => $plataformas
        ]);
         
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'cliente_id' => 'required',
            'plataforma_id' => 'required',
            'descripcion' => 'required'
        ]);
        $datos = $request->except('_token');
        if ($request->hasFile('img_error')) {
            $datos['img_error'] = $request->file('img_error')->store('uploads','public');
        }
        
       $data= Problema::create($datos);
        
        return redirect()->route('show-list')
        ->with('mensaje','Problema creado correctamente.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problema  $problema
     * @return \Illuminate\Http\Response
     */
    public function show(Problema $problema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problema  $problema
     * @return \Illuminate\Http\Response
     */
    public function edit(Problema $problema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problema  $problema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problema $problema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problema  $problema
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado= Problema::findOrFail($id);
        if (Storage::delete('public/'.$empleado->img_error)) {
            Problema::destroy($id);
        }
        Problema::destroy($id);
        return redirect()->route('show-list')->with('mensaje','Problema eliminado.');

    }
}
