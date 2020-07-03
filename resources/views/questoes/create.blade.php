@extends('layouts.app')
@section('content')
<form action="{{route('questoes.store')}}" method="post">
    @csrf

    <div class="form-group col-md-6">
    @if(Session::has('mensagem_sucesso'))
        <div class="alert alert-success">
            {{Session::get('mensagem_sucesso')}}
        </div>
    @endif
    </div>

    <div class="form-group col-md-3">
        <label for="genero_id">Teste: </label>
        <select name="teste_id" id="teste_id" class="form-control">

            @foreach($testes as $teste)
                <option value="{{$teste->id}}">{{ $teste->nome}}</option>
            @endforeach

        </select><br><br>
    </div>

    <div class="form-group">
        <label for="enunciado">Enunciado:</label>
        <textarea name="enunciado" id="enunciado" cols="30" rows="10" class="from-control" {{old('enunciado')}}></textarea>
    </div>
    <br>

    <div class="form-group col-md-6">
        <label for="respostaA">Resposta A:</label>
        <input type="text" name="respostaA" id="respostaA" class="form-control" value="{{old('respostaA')}}">
    </div>

    <div class="form-group col-md-6">
        <label for="respostaB">Resposta B:</label>
        <input type="text" name="respostaB" id="respostaB" class="form-control" value="{{old('respostaB')}}">
    </div>

    <div class="form-group col-md-6">
        <label for="respostaC">Resposta C:</label>
        <input type="text" name="respostaC" id="respostaC" class="form-control" value="{{old('respostaC')}}">
    </div>

    <div class="form-group col-md-6">
        <label for="respostaD">Resposta D:</label>
        <input type="text" name="respostaD" id="respostaD" class="form-control" value="{{old('respostaD')}}">
    </div>

    <div class="form-group col-md-6">
        <label for="respostaE">Resposta E:</label>
        <input type="text" name="respostaE" id="respostaE" class="form-control" value="{{old('respostaE')}}">
    </div>
    <br>

    <div class="form-row">
        <div class="form-group col-md-4" >
        <label for="correta"> Resposta Correta: </label>
            <select class="form-control" name="correta" id="correta">
                <option <?= (isset($resposta->correta) && ($resposta->correta == 'A'))? 'selected':'' ?>>A</option>
                <option <?= (isset($resposta->correta) && ($resposta->correta == 'B'))? 'selected':'' ?>>B</option>
                <option <?= (isset($resposta->correta) && ($resposta->correta == 'C'))? 'selected':'' ?>>C</option>
                <option <?= (isset($resposta->correta) && ($resposta->correta == 'D'))? 'selected':'' ?>>D</option>
                <option <?= (isset($resposta->correta) && ($resposta->correta == 'E'))? 'selected':'' ?>>E</option>
            </select>
        </div>
        <br>

        <div class="form-group col-md-4">
            <label for="valorQuestao">Valor da Questão:</label>
            <input type="number" name="valorQuestao" id="valorQuestao" class="form-control" value="{{old('valorQuestao')}}">
        </div>
    </div>
    <br>

    <button class="btn btn-lg btn-success">Cadastrar Questão</button>

</form>
@endsection
