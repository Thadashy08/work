<?php

namespace App\Http\Controllers\API;

use App\Models\SubCategoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SubCategoria::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        return SubCategoria::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategoria $subcategoria)
    {
        return $subcategoria;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategoria $subcategorias)
    {
        $subcategorias->update($request->all());
        return $subcategorias;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategoria $subcategorias)
    {
        $subcategorias->delete();
        return response()->json(['message' => 'Eliminado']);
    }
}
