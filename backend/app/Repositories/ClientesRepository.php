<?php

namespace App\Repositories;

use App\Models\clientes as ClientesModel;

class ClientesRepository
{
    private $clientes;

    public function __construct()
    {
        $this->clientes = new ClientesModel();
    }

    public function index()
    {
        $cliente = ClientesModel::all();
        return response()->json($cliente);
    }
    public function store($request)
    {
        $cliente = new ClientesModel;
        $cliente->nome = $request->nome;
        $cliente->sobrenome = $request->sobrenome;
        $cliente->cep = $request->cep;
        $cliente->estado = $request->estado;
        $cliente->cidade = $request->cidade;
        $cliente->produto = $request->produto;
        $cliente->qtd_compra = $request->qtd_compra;
        $cliente->valor_unitario = $request->valor_unitario;
        $cliente->data_pedido = $request->data_pedido;
        $cliente->situacao_pedido = $request->situacao_pedido;
        $cliente->save();
        return response()->json($cliente);
    }
    public function update($request, $id)
    {
//        $cliente = $this->clientes->where( "id",$id)->first();  outra forma de chamar a model e usar o eloquent
        $cliente = ClientesModel::find($id);
        $cliente->nome = $request->nome;
        $cliente->sobrenome = $request->sobrenome;
        $cliente->cep = $request->cep;
        $cliente->estado = $request->estado;
        $cliente->cidade = $request->cidade;
        $cliente->produto = $request->produto;
        $cliente->qtd_compra = $request->qtd_compra;
        $cliente->valor_unitario = $request->valor_unitario;
        $cliente->data_pedido = $request->data_pedido;
        $cliente->situacao_pedido = $request->situacao_pedido;
        $cliente->save();
        return response()->json($cliente);
    }
    public function destroy($id)
    {
        $cliente = ClientesModel::destroy($id);
        return response()->json($cliente);
    }
}
