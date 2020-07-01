@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <li>
            <a href="{{route('questoes.create')}}" class="btn btn-success float-right">Cadastrar Questões</a>
        </li>
        <li>
            <a href="{{route('home')}}" class="btn btn-primary float-right">Voltar</a>
        </li>

        <h2>Questões dos Testes</h2>

        <div class="clearfix"></div>
    </div>
</div>

<table class=" table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Teste</th>
            <th>Enunciado</th>
            <th>Valor da Questão</th>
            <th>Criado em:</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($questoes as $questao)
        <tr>
            <td>{{$questao->id}}</td>
            <td>{{$questao->teste->nome}}</td>
            <td>{{$questao->enunciado}}</td>
            <td>{{$questao->valorQuestao}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($questao->created_at))}}</td>
            <td>
                <div class="btn-group">
                    <li>
                        <a href="{{route('questoes.edit', ['questo' => $questao->id])}}" class="btn btn-sm btn-primary">Editar</a>
                    </li>
                    <form action="{{route('questoes.destroy', ['questo' => $questao->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" >Nenhum registro encontrado</td>
        </tr>
        @endforelse
    </tbody>
</table>
{{$questoes->links()}}
@endsection

