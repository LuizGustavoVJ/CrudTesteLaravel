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
}
