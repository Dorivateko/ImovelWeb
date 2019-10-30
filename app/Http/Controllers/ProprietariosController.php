<?php

namespace App\Http\Controllers;

use App\Proprietarios;
use Illuminate\Http\Request;

class ProprietariosController extends Controller
{
/*
*index - exibir uma relação de registro na "tela"
*create - exibir um formulario html para ser slicitado dados ao usuario
*store - recebe da dos do formulariao via crate e envia para o bd
*show - exibir uma pagina com os dados de um determinado registro
*edit - exibe um formulario com os dados de um determinado registro
*update - recebe os dados do formulario via edit e atualiza no bd
*destroy - exclui um determinado registro do bd
*/ 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietarios = Proprietarios::all();
        return view('proprietarios.index',$proprietarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Prorietarios  $prorietarios
     * @return \Illuminate\Http\Response
     */
    public function show(Prorietarios $prorietarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prorietarios  $prorietarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Prorietarios $prorietarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prorietarios  $prorietarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prorietarios $prorietarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prorietarios  $prorietarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prorietarios $prorietarios)
    {
        //
    }
}
