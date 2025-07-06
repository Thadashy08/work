<?php

namespace App\Http\Controllers\API;

use App\Models\SubCategorias;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SubCategorias::all();
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

        return SubCategorias::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategorias $subcategorias)
    {
        return $subcategorias;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategorias $subcategorias)
    {
        $subcategorias->update($request->all());
        return $subcategorias;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategorias $subcategorias)
    {
        $subcategorias->delete();
        return response()->json(['message' => 'Eliminado']);
    }
}
