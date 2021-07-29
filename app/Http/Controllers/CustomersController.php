<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function create()
    {
        return view("customers.create", [
            'title' => 'Cadastrar Cliente'
        ]);
    }

    public function edit()
    {
        return view("customers.edit", [
            'title' => 'Editar Cliente'
        ]);
    }

    public function index()
    {
        return view("customers.index", [
            'title' => 'Listagem de Clientes'
        ]);
    }

    public function show()
    {
        return view("customers.show", [
            'title' => 'Visualização de Cliente'
        ]);
    }
}
