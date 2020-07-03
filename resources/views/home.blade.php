@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <a href="{{route('questoes.index')}}" class="btn btn-success form-control">Gerenciar Questões</a>


        <a href="{{route('testes.index')}}" class="btn btn-primary form-control"> Gerenciar Testes</a>
        
       
    </div>
</div>
@endsection
