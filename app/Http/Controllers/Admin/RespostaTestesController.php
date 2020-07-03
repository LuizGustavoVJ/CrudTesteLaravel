<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questao;
use App\Teste;
use App\respostaTestes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RespostaTestesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Teste $teste)
    {

        return view('respostaTestes.index')->with('teste', $teste);

    }

    public function respostas(Request $request, $id)
    {
        $data = $request->all();
        $usuario = Auth::user()->name;
        $testes = Teste::find($id);
        $pontuacaoMinima = $testes->pontuacaoMinima;
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
     * @param  \App\respostaTestes  $respostaTestes
     * @return \Illuminate\Http\Response
     */
    public function show(respostaTestes $respostaTestes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\respostaTestes  $respostaTestes
     * @return \Illuminate\Http\Response
     */
    public function edit(respostaTestes $respostaTestes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\respostaTestes  $respostaTestes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, respostaTestes $respostaTestes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\respostaTestes  $respostaTestes
     * @return \Illuminate\Http\Response
     */
    public function destroy(respostaTestes $respostaTestes)
    {
        //
    }
}
