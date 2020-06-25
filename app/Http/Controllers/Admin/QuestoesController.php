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
       Questao::all();
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
        dd(Questao::findOrFail($id));
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

        Session::flash('mensagem_sucesso', 'Questão alterada com Sucesso!');

        $questao->update($data);

        return back();
    }

    public function destroy($id)
    {
        $questao = Questao::findOrFail($id);

        Session::flash('mensagem_sucesso', 'Questão deletada com Sucesso!');

        dd($questao->delete());

    }
}
