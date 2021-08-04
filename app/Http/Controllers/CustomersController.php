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
            'customer' => Customer::find($id)
        ]);
    }

    public function index()
    {
        return view("customers.index", [
            'title' => 'Listagem de Clientes',
            'customers' => Customer::simplePaginate(4)
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

        $request->session()->flash('registerSuccess', 'Cliente cadastrado com sucesso!');

        return redirect()->route('customers.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:customers,email,' . $id,
            'birthday' => 'required|date'
        ]);
        $customer = Customer::findOrFail($id);

        $customer->update($data);

        return redirect()->route('customers.index')->with(
            'success',
            'Cliente atualizado com sucesso'
        );
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('customers.index')->with(
            'success',
            'Cliente removido com sucesso'
        );
    }
}
