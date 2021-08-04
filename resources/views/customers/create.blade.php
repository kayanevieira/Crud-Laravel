@extends('layout')
@section('content')
    @include('components.navbar')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('customers.store') }}" class="form-group">
            @csrf
            <h1 class="d-flex justify-content-center m-3">Cadastro</h1>
            <label for="Nome">Nome</label>
            <input type="text" placeholder="Nome..." class="form-control" name="name">
            <label for="Email">Email</label>
            <input type="email" placeholder="Email..." class="form-control" name="email">
            <label for="Data">Data de Nascimento</label>
            <input type="date" class="form-control" name="birthday">
            <input type="submit" value="Enviar" class="btn btn-success mx-auto d-block m-3">
        </form>
    </div>

@endsection
