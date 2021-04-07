<?php

namespace App\Repositories;

use App\Models\produtos as ProdutosModel;

class ProdutosRepository
{
    private $produtos;

    public function __construct()
    {
        $this->produtos = new ProdutosModel();
    }

    public function index()
    {
        $produto = ProdutosModel::all();
        return response()->json($produto);
    }

    public function store($request)
    {
        $produto = new ProdutosModel;
        $produto->nome = $request->nome;
        $produto->qtd_estoque = $request->qtd_estoque;
        $produto->valor_unitario = $request->valor_unitario;
        $produto->situacao_produto = $request->situacao_produto;
        $produto->save();
        return response()->json($produto);
    }
    public function update( $request, $id)
    {
        $produto = ProdutosModel::find($id);
        $produto->nome = $request->nome;
        $produto->qtd_estoque = $request->qtd_estoque;
        $produto->valor_unitario = $request->valor_unitario;
        $produto->situacao_produto = $request->situacao_produto;
        $produto->save();
        return response()->json($produto);
    }
    public function destroy($id)
    {
        $produto = ProdutosModel::destroy($id);
        return response()->json($produto);

    }


}
