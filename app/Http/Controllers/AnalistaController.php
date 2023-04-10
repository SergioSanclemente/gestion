<?php

namespace App\Http\Controllers;

use App\Models\Analista;
use Illuminate\Http\Request;

class AnalistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('analista.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function show(Analista $analista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function edit(Analista $analista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analista $analista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analista $analista)
    {
        //
    }
}
