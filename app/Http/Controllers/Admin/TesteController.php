<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function create()
    {
        return view('teste.create');
    }

    public function store(Request $request)
    {
        echo "Teste Criado com sucesso!";

        if (empty($request->nome) or empty($request->pontuacaoMinima))
        {
            return back()->withInput();
        }

    }
}
