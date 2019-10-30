<?php

namespace App\Http\Controllers;

use App\Alugueis;
use Illuminate\Http\Request;

class AlugueisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alugueis = Alugueis::all();
        return view('alugueis.index',$alugueis);
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
     * @param  \App\Alugueis  $alugueis
     * @return \Illuminate\Http\Response
     */
    public function show(Alugueis $alugueis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alugueis  $alugueis
     * @return \Illuminate\Http\Response
     */
    public function edit(Alugueis $alugueis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alugueis  $alugueis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alugueis $alugueis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alugueis  $alugueis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alugueis $alugueis)
    {
        //
    }
}
