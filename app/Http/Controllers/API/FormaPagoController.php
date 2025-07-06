<?php

namespace App\Http\Controllers\API;

use App\Models\FormaPago;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FormaPago::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'forma_pago' => 'required|string|max:255'
        ]);

        return FormaPago::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(FormaPago $formaPago)
    {
        return $formaPago;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormaPago $formaPago)
    {
        $formaPago->update($request->all());
        return $formaPago;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormaPago $formaPago)
    {
        $formaPago->delete();
        return response()->json(['message' => 'Eliminado']);
    }
}
