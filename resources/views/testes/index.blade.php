@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm1-2">
        <a href="{{route('testes.create')}}" class="btn btn-seccess flot-right"></a>
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
</table>
@endsection


