@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <li>
        <a href="{{route('questoes.index')}}" class="btn btn-success form-control">Questões</a>
    </li>
    <li>
        <a href="{{route('testes.index')}}" class="btn btn-primary form-control">Testes</a>
    </li>
    </div>
</div>
@endsection
