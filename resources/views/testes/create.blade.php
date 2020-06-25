@extends('layouts.app')
@section('content')
<form action="{{route('testes.store')}}" method="post">
@csrf

    <div class="form-group col-md-6">
        @if(Session::has('mensagem_sucesso'))
            <div class="alert alert-success">
                {{Session::get('mensagem_sucesso')}}
            </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{old('nome')}}">
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="pontuacaoMinima">Pontuação Mínima:</label>
        <input type="number" name="pontuacaoMinima" id="pontuacaoMinima" class="form-control" value="{{old('pontuacaoMinima')}}">
    </div>
    <br>

    <button class="btn btn-lg btn-success">Cadastrar Teste</button>

</form>

@endsection
