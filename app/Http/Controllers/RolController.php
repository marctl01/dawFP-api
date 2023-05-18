<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function store(Request $request)
    {
        $role = new Rol;
        $role->name = $request->input('name');
        $role->save();

        return response()->json($role, 201);
    }

    public function index()
    {
        $roles = Rol::all();

        return response()->json($roles, 200);
    }

    public function show($id)
    {
        $role = Rol::find($id);

        if (!$role) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        return response()->json($role, 200);
    }

    public function update(Request $request, $id)
    {
        $role = Rol::find($id);

        if (!$role) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        $role->name = $request->input('name');
        $role->save();

        return response()->json($role, 200);
    }

    public function destroy($id)
    {
        $role = Rol::find($id);

        if (!$role) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        $role->delete();

        return response()->json(['message' => 'Rol eliminado correctamente'], 200);
    }

}
