@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    <a href="{{route('testes.index')}}" class="btn btn-primary float-right">Voltar</a>

        <h2>Caderno de Questões</h2>

        <div class="clearfix"></div>
    </div>
</div>

<table class=" table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Enunciado</th>
            <th>Valor da Questão</th>
            <th>Criado em:</th>
            <th>Marque sua Resposta</th>
        </tr>
    </thead>
    <tbody>
        @forelse($teste->questoes as $questao)
        <tr>
            <td>{{$questao->id}}</td>
            <td>{{$questao->enunciado}}</td>
            <td>{{$questao->valorQuestao}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($questao->created_at))}}</td>
            <td>
                <div class="form-check form-check-inline">
                A:&ensp;<input class="form-check-input" type="checkbox" name="respostas" id="respostaA" value="a">
                <label class="form-check-label" for="respostaA">{{$questao->respostaA}}</label>
                </div>
                <div class="form-check form-check-inline">
                    B:&ensp;<input class="form-check-input" type="checkbox" name="respostas" id="respostaB" value="b">
                    <label class="form-check-label" for="respostaB">{{$questao->respostaB}}</label>
                </div>
                <div class="form-check form-check-inline">
                    C:&ensp;<input class="form-check-input" type="checkbox" name="respostas" id="respostaC" value="c" >
                    <label class="form-check-label" for="respostaC">{{$questao->respostaC}}</label>
                </div>
                <div class="form-check form-check-inline">
                    D:&ensp;<input class="form-check-input" type="checkbox" name="respostas" id="respostaD" value="d" >
                    <label class="form-check-label" for="respostaD">{{$questao->respostaD}}</label>
                </div>
                <div class="form-check form-check-inline">
                    E:&ensp;<input class="form-check-input" type="checkbox" name="respostas" id="respostaE" value="e" >
                    <label class="form-check-label" for="respostaE">{{$questao->respostaE}}</label>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" >Nenhum registro encontrado</td>
        </tr>
        @endforelse
        <td>
            <div class="btn-group">
                @csrf
                <button class="btn btn-md btn-primary">Responder Teste</button>
            </div>
        </td>
    </tbody>
</table>
@endsection
