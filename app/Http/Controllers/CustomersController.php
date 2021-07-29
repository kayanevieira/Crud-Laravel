<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function register()
    {
        return view("customers.register", [
            'title' => 'Cadastrar Cliente'
        ]);
    }

    public function edit()
    {
        return view("customers.edit", [
            'title' => 'Editar Cliente'
        ]);
    }

    public function list()
    {
        return view("customers.list", [
            'title' => 'Listagem de Clientes'
        ]);
    }

    public function toView()
    {
        return view("customers.to-view", [
            'title' => 'Visualização de Cliente'
        ]);
    }
}
