@extends('layout')
@section('content')
@include('components.navbar')
<h2 class="d-flex justify-content-center mt-4">Visualização</h2>
<div class="mt-4 card">
    <div class="card-body mx-auto" style="width:45rem;">
        <ul class="list-group">
            <li class="list-group-item">
                <b>Nome</b>: Joana
            </li>
            <li class="list-group-item">
                <b>E-mail</b>: joana@hotmail.com
            </li>
        </ul>
    </div>
    <div class="btn-lg mx-auto">
        <a href="/list"><button class="btn btn-primary">
                Voltar
            </button></a>
    </div>
</div>

@endsection
