@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm1-2">
        <a href="{{route('teste.create')}}" class="btn btn-seccess flot-right"></a>
        <h2>Questões dos Testes</h2>
        <div class="clearfix"></div>
    </div>
</div>

<table class=" table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome do Teste</th>
            <th>Enunciado</th>
            <th>Valor da Questão</th>
            <th>Criado em:</th>
            <th>Ações</th>
        </tr>
    </thead>
</table>

@endsection

