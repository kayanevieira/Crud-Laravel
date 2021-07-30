@extends('layout')
@section('content')
@include('components.navbar')

<div class="container">
    <form class="form-group" >
        <h1 class="d-flex justify-content-center m-3">Editar</h1>
        <label for="Nome">Nome</label>
        <input type="text" placeholder="Nome..." class="form-control">
        <label for="Email">Email</label>
        <input type="email" placeholder="Email..." class="form-control">
        <label for="Data">Data de Nascimento</label>
        <input type="date" class="form-control">
        <input type="submit" value="Editar" class="btn btn-success mx-auto d-block m-3">
    </form>
</div>

@endsection
