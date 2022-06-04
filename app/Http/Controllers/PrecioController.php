<?php

namespace App\Http\Controllers;

use App\Models\Precio;
use App\Http\Requests\StorePrecioRequest;
use App\Http\Requests\UpdatePrecioRequest;

class PrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $precios = Precio::all();
        return Response()->json([
            "message" => "Mostrando Datos",
            "data" => $precios,
            "status" => 200
        ],200);
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
     * @param  \App\Http\Requests\StorePrecioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrecioRequest $request)
    {
        $precio = Precio::create($request->all());
        return response()->json([
            "message" => "El precio ha sido creado correctamente",
            "data" => $precio,
            "status" => 202
        ],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function show(Precio $precio)
    {
        return response()->json([
            "message" => "Mostrando un Dato",
            "data" => $precio,
            "status" => 203
        ],203);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function edit(Precio $precio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrecioRequest  $request
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrecioRequest $request, Precio $precio)
    {
        $precio->update($request->all());
        return response()->json([
            "message" => "El precio ha sido Actualizado correctamente",
            "data" => $precio,
            "status" => 202
        ],202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Precio $precio)
    {
        $precio->delete();
        return $precio;
    }
}
