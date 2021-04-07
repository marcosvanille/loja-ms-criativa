<?php

namespace App\Http\Controllers;

use App\Services\ProdutosService;
use Illuminate\Http\Request;
use App\Models\produtos as ProdutosModel;

class Produtos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $produtosService;

    public function __construct(ProdutosService $produtosService)
    {
        $this->produtosService = $produtosService;
    }

    public function index()
    {
        $produto = self::getProdutosService()->index();
        return response()->json($produto);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = self::getProdutosService()->store($request);
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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $produto = self::getProdutosService()->update($request,$id);
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
        $produto = self::getProdutosService()->destroy($id);
        return response()->json($produto);

    }

    public function getProdutosService()
    {
        return $this->produtosService;
    }
}
