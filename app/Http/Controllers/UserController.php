<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
    
        return response()->json($users, 200);
    }
    

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->rol_id = $request->input('rol_id');
        $user->save();
    
        return response()->json($user, 201);
    }
    

    public function show($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
    
        return response()->json($user, 200);
    }
    

    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->rol_id = $request->input('rol_id');
        $user->save();
    
        return response()->json($user, 200);
    }
    

    public function destroy($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
    
        $user->delete();
    
        return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
    }
    
}
