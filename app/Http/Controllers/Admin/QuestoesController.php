<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestoesController extends Controller
{
    public function create()
    {
        return view('questoes.create');
    }

    public function store(Request $request)
    {
        echo "Questão armazenada com sucesso!";

        if (empty($request->enunciado) or empty($request->respostaA) or empty($request->respostaB)
         or empty($request->respostaC) or empty($request->respostaD) or empty($request->respostaE)
         or empty($request->correta) or empty($request->valorQuestao))
        {
            return back()->withInput();
        }

    }
}
