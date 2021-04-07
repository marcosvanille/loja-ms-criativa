<?php

namespace App\Services;

use App\Models\produtos;
use App\Repositories\ProdutosRepository;

class ProdutosService
{
    private $produtosRepository;

    public function __construct(ProdutosRepository $produtosRepository)
    {
        $this->produtosRepository = $produtosRepository;
    }

    public function index()
    {
        return self::getProdutosRepository()->index();

    }

    public function store($request)
    {
        return Self::getProdutosRepository()->store($request);
    }

    public function update($request, $id)
    {
        return Self::getProdutosRepository()->update($request, $id);
    }

    public function destroy($id)
    {

        return self::getProdutosRepository()->destroy($id);
    }

    public function getProdutosRepository()
    {
        return $this->produtosRepository;
    }
}
