<?php

namespace App\Services;

use App\Models\clientes;
use App\Repositories\ClientesRepository;

class ClientesService
{
    private $clientesRepository;

    public function __construct(ClientesRepository $clientesRepository)
    {
        $this->clientesRepository = $clientesRepository;
    }

    public function index()
    {
        return self::getClientesRepository()->index();
    }

    public function store($request)
    {
        return Self::getClientesRepository()->store($request);
    }


    public function update($request, $id)
    {
        return Self::getClientesRepository()->update($request, $id);
    }
    public function destroy($id)
    {

        return self::getClientesRepository()->destroy($id);
    }

    public function getClientesRepository()
    {
        return $this->clientesRepository;
    }

}
