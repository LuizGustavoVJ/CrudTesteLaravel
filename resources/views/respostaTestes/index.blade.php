@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">

        <a href="{{route('home')}}" class="btn btn-primary float-right">Voltar</a>

        <h2>Caderno de Questões</h2>

        <div class="clearfix"></div>
    </div>
</div>


<form class="form-group">

    <body>
        @forelse($teste->questoes as $questao)
        
            <div class="form-group col-md-6">
                
                    <div>
                        <h5>{{$questao->enunciado}}</h5>
                    </div>
                


                
                    <div class="form-group col-md-6">
                        A: <input type="Radio" name="respostas" id="respostaA" class="form-control" value="a"> {{$questao->respostaA}}
                    </div>
                
                    <div class="form-group col-md-6">
                        B: <input type="Radio" name="respostas" id="respostaB" class="form-control" value="b">
                        {{$questao->respostaB}}
                    </div>
                
                    <div class="form-group col-md-6">
                        C: <input type="Radio" name="respostas" id="respostaC" class="form-control" value="c"> {{$questao->respostaC}}
                    </div>

                
                    <div class="form-group ">
                        D: <input type="radio" name="respostas" id="respostaD" class="form-control" value="d">
                        {{$questao->respostaD}}
                    </div>

               
                    <div class="form-group col-md-6">
                        E: <input type="Radio" name="respostas" id="respostaE" class="form-control" value="e">
                        {{$questao->respostaE}}
                    </div>
                
                
        
        @empty
        
        @endforelse
        
                    <div class="btn-group">
                            @csrf
                            
                            <button class="btn btn-sm btn-success">Responder Teste</button>
                        </form>
                    </div>
                
    <body>
</form>
@endsection