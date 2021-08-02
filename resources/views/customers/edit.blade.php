@extends('layout')
@section('content')
    @include('components.navbar')


    <form method="POST" action="{{ route('customers.update', ['id' => $customer->id]) }}" class="container">
        @method('PUT')
        @csrf

        <div class="container">
            <h1 class="d-flex justify-content-center m-3">Editar</h1>
            <label for="Nome">Nome</label>
            <input type="text" placeholder="Nome..." class="form-control" value="{{ $customer->name }}" name="name">
            <label for="Email">Email</label>
            <input type="email" placeholder="Email..." class="form-control" value="{{ $customer->email }}" name="email">
            <label for="Data">Data de Nascimento</label>
            <input type="date" class="form-control" value="{{ $customer->birthday }}" name="birthday">
            <input type="submit" value="Editar" class="btn btn-success mx-auto d-block m-3">
    </form>
    </div>

@endsection
