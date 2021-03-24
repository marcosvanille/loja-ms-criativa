<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produtos as ProdutosModel;

class Produtos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = ProdutosModel::all();
        return response()->json($produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new ProdutosModel;
        $produto->nome = $request->nome;
        $produto->qtd_estoque = $request->qtd_estoque;
        $produto->valor_unitario = $request->valor_unitario;
        $produto->situacao_produto = $request->situacao_produto;
        $produto->save();
        return response()->json($produto);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = ProdutosModel::find($id);
        $produto->nome = $request->nome;
        $produto->qtd_estoque = $request->qtd_estoque;
        $produto->valor_unitario = $request->valor_unitario;
        $produto->situacao_produto = $request->situacao_produto;
        $produto->save();
        return response()->json($produto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
