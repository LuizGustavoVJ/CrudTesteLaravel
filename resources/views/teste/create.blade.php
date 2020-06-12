<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<form action="{{route('teste.store')}}" method="post">

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

    <input type="hidden" name="id" value="<?= $valorTeste->id??'' ?>">

    <button type="button" class="btn btn-success">Cadastrar Teste</button>

</form>