<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function create()
    {
        return view("customers.create", [
            'title' => 'Cadastrar Cliente'
        ]);
    }

    public function edit($id)
    {
        return view("customers.edit", [
            'title' => 'Editar Cliente',
            'customer'=> Customer::find($id)
        ]);
    }

    public function index()
    {
        return view("customers.index", [
            'title' => 'Listagem de Clientes',
            'customers' => Customer::all()
        ]);
    }

    public function show($id)
    {
        return view("customers.show", [
            'title' => 'Visualização de Cliente',
            'customer' => Customer::find($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:customers,email',
            'birthday' => 'required|date'
        ]);

        Customer::create($data);
        return redirect()->route('customers.index');
    }
}
