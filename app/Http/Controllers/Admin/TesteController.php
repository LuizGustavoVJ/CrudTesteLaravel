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
        return view('teste.create');
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


}
