@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <li>
            <a href="{{route('questoes.create')}}" class="btn btn-success flot-right">Cadastrar Questão</a>
        </li>
        <li>
            <a href="{{route('testes.index')}}" class="btn btn-primary float-right">Voltar</a>
        </li>

        <div class="clear-fix"></div>
    </div>
</div>

<table class=" table table-striped">
    <thead>
        <tr>
            <th>Questões</th>
            <th>Enunciado</th>
            <th>Valor da Questão</th>
            <th>Criado em:</th>
        </tr>
    </thead>
    <tbody>
        @forelse($questoes as $questao)
        <tr>
            <td>{{$questao->id}}</td>
            <td>{{$questao->enunciado}}</td>
            <td>{{$questao->valorQuestao}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($questao->created_at))}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" >Nenhum registro encontrado</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection

