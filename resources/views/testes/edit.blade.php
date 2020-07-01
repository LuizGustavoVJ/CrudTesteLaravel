@extends('layouts.app')
@section('content')
<form action="{{route('testes.update', ['testis' => $teste->id])}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-group col-md-6">
    @if(Session::has('mensagem_sucesso'))
        <div class="alert alert-success">
            {{Session::get('mensagem_sucesso')}}
        </div>
    @endif
    </div>

    <div class="form-group col-md-6">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{$teste->nome}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="pontuacaoMinima">Pontuação Mínima:</label>
        <input type="number" name="pontuacaoMinima" id="pontuacaoMinima" class="form-control" value="{{$teste->pontuacaoMinima}}">
    </div>
    <br>

    <button class="btn btn-lg btn-success">Alterar Teste</button>

</form>
<hr>
<a href="{{route('testes.index')}}" class="btn btn-primary float-left">Voltar</a>
@endsection
