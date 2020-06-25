<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Teste;
use App\Post;
use Carbon\Traits\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TesteController extends Controller
{
    public function index()
    {
       Teste::all();
    }

    public function create()
    {
        return view('testes.create');
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teste = $request->all();

        Teste::create($teste);

        Session::flash('mensagem_sucesso', 'Teste cadastrado com Sucesso!');

        return back();
    }

    public function show($id)
    {
        dd(Teste::findOrFail($id));
    }

    public function edit($id)
    {
        $teste = Teste::findOrFail($id);
        return view('testes.edit')->withTeste($teste);
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $teste = Teste::findOrFail($id);

        Session::flash('mensagem_sucesso', 'Teste alterado com Sucesso!');

        $teste->update($data);

        return back();
    }

    public function destroy($id)
    {
        $teste = Teste::findOrFail($id);

        Session::flash('mensagem_sucesso', 'Teste deletado com Sucesso!');

        dd($teste->delete());

    }

}
