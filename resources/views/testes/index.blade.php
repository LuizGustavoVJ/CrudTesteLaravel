@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <a href="{{route('testes.create')}}" class="btn btn-success float-right">Criar Testes</a>
        <a href="{{route('home')}}" class="btn btn-primary float-right">Voltar</a>
    
        <h2>Testes do Trabalho</h2>
        <div class="clearfix"></div>
    </div>
</div>

<table class=" table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Pontuação Mínima</th>
            <th>Criado em:</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($testes as $teste)
        <tr>
            <td>{{$teste->id}}</td>
            <td>{{$teste->nome}}</td>
            <td>{{$teste->pontuacaoMinima}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($teste->created_at))}}</td>
            <td>
                <div class="btn-group">
                        <a href="{{route('testes.edit', ['testis' => $teste->id])}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{route('testes.show', ['testis' => $teste->id])}}" class="btn btn-sm btn-primary">Exibir Questões</a>
                        <a href="{{route('respostaTeste', $teste->id)}}" class="btn btn-sm btn-success">Responder Teste</a>
                        <form action="{{route('testes.destroy', ['testis' => $teste->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" >Nenhum registro encontrado</td>
        </tr>
        @endforelse
    </tbody>
</table>
{{$testes->links()}}
@endsection


