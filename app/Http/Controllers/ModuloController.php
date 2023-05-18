<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModuloController extends Controller
{
    public function store(Request $request)
    {
        $modulo = new Modulo;
        $modulo->name = $request->input('name');
        $modulo->save();

        return response()->json($modulo, 201);
    }

    public function index()
    {
        $modulos = Modulo::all();

        return response()->json($modulos, 200);
    }

    public function show($id)
    {
        $modulo = Modulo::find($id);

        if (!$modulo) {
            return response()->json(['message' => 'Módulo no encontrado'], 404);
        }

        return response()->json($modulo, 200);
    }

    public function update(Request $request, $id)
    {
        $modulo = Modulo::find($id);

        if (!$modulo) {
            return response()->json(['message' => 'Módulo no encontrado'], 404);
        }

        $modulo->name = $request->input('name');
        $modulo->save();

        return response()->json($modulo, 200);
    }

    public function destroy($id)
    {
        $modulo = Modulo::find($id);

        if (!$modulo) {
            return response()->json(['message' => 'Módulo no encontrado'], 404);
        }

        $modulo->delete();

        return response()->json(['message' => 'Módulo eliminado correctamente'], 200);
    }

}
