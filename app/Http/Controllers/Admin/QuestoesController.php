<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questao;
use App\Teste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestoesController extends Controller
{

    public function index()
    {
        return view('questoes.index')->withQuestoes(Questao::paginate(5));
    }

    public function create()
    {
        $testes = Teste::all();
        return view('questoes.create', compact('testes'));
    }

    public function store(Request $request)
    {
        $questoes = $request->all();

        Questao::create($questoes);

        Session::flash('mensagem_sucesso', 'Questão cadastrada com Sucesso!');

        return back();
    }

    public function show($id)
    {
        Questao::findOrFail($id);
    }

    public function edit($id)
    {
        $testes = Teste::all();
        $questao = Questao::findOrFail($id);

        return view('questoes.edit', compact('testes'))->withQuestao($questao);
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $questao = Questao::findOrFail($id);

        $questao->update($data);

        Session::flash('mensagem_sucesso', 'Questão alterada com Sucesso!');

        return redirect()->route('questoes.index');
    }

    public function destroy($id)
    {
        $questao = Questao::findOrFail($id);

        $questao->delete();

        Session::flash('mensagem_sucesso', 'Questão excluída com Sucesso!');

        return back();

    }
}
