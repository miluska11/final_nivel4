<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class RolesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = new Roles();
        return $roles->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('roles.create_role');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'rol' => 'required',
            'fechacreacion' => 'required', // Agrega validaciones para otros campos
            // ...
        ]);

        $role = new Roles(); // Cambio aquí
        $role->rol = $request->rol;
        $role->fechacreacion = $request->fechacreacion;
        $role->fechamodificacion = $request->fechamodificacion;
        $role->usuariocreacion = $request->usuariocreacion;
        $role->usuariomodificacion = $request->usuariomodificacion;
        $role->save();

        return redirect()->route('roles.create')->with('success', 'Rol creado exitosamente');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $roles = new Roles();
        return $roles->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id , Request $request)
    {
        $roles= Roles::find($id);
        $roles->rol = $request->rol;
        $roles->fechacreacion = $request->fechacreacion;
        $roles->fechamodificacion = $request->fechamodificacion;
        $roles->usuariocreacion = $request->usuariocreacion;
        $roles->usuariomodificacion = $request->usuariomodificacion;
        $roles->save();
        return response()->json(["message" =>"usuario actualizado"],200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roles = Roles::find($id);
        $roles->delete();
        return response()->json(["message" =>"usuario eliminado"],200); 

    }
}
