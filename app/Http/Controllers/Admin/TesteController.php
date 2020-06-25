<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questao;
use App\Teste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TesteController extends Controller
{
    private $teste;

    public function construct(Teste $teste)
    {
        $this->teste = $teste;
    }

    public function index()
    {
        return view('testes.index')->withTestes(Teste::paginate(5));
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
        $testes = $request->all();

        Teste::create($testes);

        Session::flash('mensagem_sucesso', 'Teste cadastrado com Sucesso!');

        return back();
    }

    public function show($id)
    {
        $questoes = Questao::all();
        return view('testes.show')->withQuestoes($questoes);
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

        $teste->update($data);

        Session::flash('mensagem_sucesso', 'Teste alterado com Sucesso!');

        return redirect()->route('testes.index');
    }

    public function destroy($id)
    {
        $teste = Teste::findOrFail($id);

        $teste->delete();

        Session::flash('mensagem_sucesso', 'Teste excluido com Sucesso!');

        return back();

    }

}
