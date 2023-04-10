<?php

namespace App\Http\Controllers;

use App\Models\Problema;
use App\Models\Cliente;
use App\Models\Plataforma;
use Illuminate\Http\Request;

class ProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $clientes = Cliente::all();
        // $plataforma = Plataforma::all();
      
        // dd($clientes);
        return view('problemas.index');


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
        //dd($request->all());
       Problema::create($request->all());
        
        return redirect()->route('show-list')
        ->with('success','Product created successfully.');
       
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
    public function destroy(Problema $problema)
    {
        //
    }
}
