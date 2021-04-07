<?php

namespace App\Http\Controllers;

use App\Services\ClientesService;
use Illuminate\Http\Request;
use App\Models\clientes as ClientesModel;

class Clientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $clientesService;

    public function __construct(ClientesService $clientesService)
    {
        $this->clientesService = $clientesService;
    }

    public function index()
    {
        $cliente = self::getClientesService()->index();
        return response()->json($cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = self::getClientesService()->store($request);
        return response()->json($cliente);
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
        $cliente = self::getClientesService()->update($request, $id);
        return response()->json($cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = self::getClientesService()->destroy($id);
        return response()->json($cliente);
    }

    public function getClientesService()
    {
        return $this->clientesService;
    }

}
