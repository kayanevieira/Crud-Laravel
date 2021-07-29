@extends('layout')
@section('content')
@include('components.navbar')

<div class="container mt-2">
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
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>João da Silva</td>
                        <td>email@email</td>
                        <td>
                            <div class="btn-group">
                                <a href="/customers/1" class="btn btn-primary">
                                    <span>Visualizar</span>
                                </a>
                                <a href="/customers/1/edit" class="btn btn-primary">
                                    <span>Editar</span>
                                </a>
                                <a href="/customers" class="btn btn-primary">
                                    <span>Remover</span>
                                </a>
                        </td>
                    </tr>
                </tbody>
        </div>
        <tbody>
            <tr>
                <td>2</td>
                <td>Kay</td>
                <td>kay@hotmail.com</td>
                <td>
                    <div class="btn-group">
                        <a href="/customers/1/show" class="btn btn-primary">
                            <span>Visualizar</span>
                        </a>
                        <a href="/edit" class="btn btn-primary">
                            <span>Editar</span>
                        </a>
                        <a href="/" class="btn btn-primary">
                            <span>Remover</span>
                        </a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
</div>
</div>

@endsection
