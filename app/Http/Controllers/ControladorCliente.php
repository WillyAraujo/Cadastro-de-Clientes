<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required | min:3',
            'idade' => 'required',
            'endereco' => 'required | min:20',
            'email' => 'required | email | unique:clientes'
        ];

        $mensagens = [
            'required' => 'O campo :attribute é obrigatório.',
            'idade.min' => 'É necessário nome maior que 3 caracteres.',
            'endereco.min' => 'Endereço muito curto (mínimo 20 caracteres',
            'email.unique' => 'E-mail já cadastrado. Digite outro e-mail.'
        ];

        $request->validate($regras, $mensagens);

        // $request->validate([
        //     'nome' => 'required',
        //     'idade' => 'reqired',
        //     'endereco' => 'required',
        //     'email' => 'required | email'
        // ]);

        $cliente = new Cliente;
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
