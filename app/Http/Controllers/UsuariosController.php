<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateN(Request $request)
    {
        $request->validate([
            'nom_usu' => 'required|max:255|unique:users'
        ]);
        $ide_usu = auth()->user()->id;
        $user =User::findOrFail($ide_usu);
        $user->name = $request->nom_usu;
        $user->save();
        return view('home'); 
        
    }
    public function updateP(Request $request)
    {
        $request->validate([
            'fot_usu' => 'required|image|max:250'
        ]);
        $ide_usu = auth()->user()->id;
        $user =User::findOrFail($ide_usu);
        Storage::delete($user->fot_usu);
        $user->fot_usu = Storage::url($request->file('fot_usu')->store('public/image/users'));
        $user->save();
        session(['fot_usu' => $user->fot_usu]);
        return view('home'); 
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $ide_usu = auth()->user()->id;
        $user =User::findOrFail($ide_usu);
        $user->est_usu = "Inactivo";
        $user->save();
        auth()->logout($user);
        return view('index'); 
    }
}
