@extends('layout')
@section('content')
    @include('components.navbar')

    <div class="container mt-2">
        @if (session()->has('success'))
            <div class="row">
                <div class="col">
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row mb-2">
            <div class="col">
                <a href="{{ route('customers.create') }}" class="btn btn-success">
                    <span>Novo Registro</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Nome</td>
                            <td>E-mail</td>
                            <td>Data de Nascimento</td>
                            <td>Ações</td>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->birthday }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('customers.show', ['id' => $customer->id]) }}"
                                            class="btn btn-warning">
                                            <span>Visualizar</span>
                                        </a>
                                        <a href="{{ route('customers.edit', ['id' => $customer->id]) }}" class="btn btn-primary">
                                            <span>Editar</span>
                                        </a>
                                        <form method="POST" class="btn-group"
                                        action="{{ route('customers.destroy', ['id' => $customer->id]) }}" onsubmit="return confirm('Tem certeza que deseja deletar?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Deletar</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                 {{ $customers->links() }}
            </div>
        </div>
    </div>

@endsection
