<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uf;

class UfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ufs = Uf::all();
    
        return response()->json($ufs, 200);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $uf = new Uf;
        $uf->modulo_id = $request->input('modulo_id');
        $uf->name = $request->input('name');
        $uf->save();
    
        return response()->json($uf, 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $uf = Uf::find($id);
    
        if (!$uf) {
            return response()->json(['message' => 'Unidad de formación no encontrada'], 404);
        }
    
        return response()->json($uf, 200);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $uf = Uf::find($id);
    
        if (!$uf) {
            return response()->json(['message' => 'Unidad de formación no encontrada'], 404);
        }
    
        $uf->modulo_id = $request->input('modulo_id');
        $uf->name = $request->input('name');
        $uf->save();
    
        return response()->json($uf, 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $uf = Uf::find($id);
    
        if (!$uf) {
            return response()->json(['message' => 'Unidad de formación no encontrada'], 404);
        }
    
        $uf->delete();
    
        return response()->json(['message' => 'Unidad de formación eliminada correctamente'], 200);
    }
    
}
