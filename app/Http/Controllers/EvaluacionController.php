<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluacion;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluaciones = Evaluacion::all();
    
        return response()->json($evaluaciones, 200);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion;
        $evaluacion->user_id = $request->user_id;
        $evaluacion->modulo_id = $request->modulo_id;
        $evaluacion->unidadf_id = $request->unidadf_id;
        $evaluacion->nota = $request->nota;
        $evaluacion->save();
    
        return response()->json($evaluacion, 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evaluacion = Evaluacion::find($id);
    
        if (!$evaluacion) {
            return response()->json(['message' => 'Evaluación no encontrada'], 404);
        }
    
        return response()->json($evaluacion, 200);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evaluacion = Evaluacion::find($id);
    
        if (!$evaluacion) {
            return response()->json(['message' => 'Evaluación no encontrada'], 404);
        }
    
        $evaluacion->user_id = $request->user_id;
        $evaluacion->modulo_id = $request->modulo_id;
        $evaluacion->unidadf_id = $request->unidadf_id;
        $evaluacion->nota = $request->nota;
        $evaluacion->save();
    
        return response()->json($evaluacion, 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evaluacion = Evaluacion::find($id);
    
        if (!$evaluacion) {
            return response()->json(['message' => 'Evaluación no encontrada'], 404);
        }
    
        $evaluacion->delete();
    
        return response()->json(['message' => 'Evaluación eliminada correctamente'], 200);
    }
    
}
