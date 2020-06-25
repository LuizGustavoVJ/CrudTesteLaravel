<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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

<form action="{{route('testes.destroy', ['testis' => $teste->id])}}" method="POST">
    @csrf
    @method("DELETE")

    <button class="btn btn-lg btn-danger">Remover Teste</button>

</form>
