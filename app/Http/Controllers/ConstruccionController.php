<?php

namespace App\Http\Controllers;

use App\Models\Construcciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConstruccionController extends Controller
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
        return view('construcciones.create_constructions'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom_con' => 'required|max:50',
            'fot1_con' => 'required|image|max:250',
            'fot2_con' => 'required|image|max:250',
            'fot3_con' => 'required|image|max:250',
            'con_con' => 'required|mimes:rar,zip|max:250',
            'txt_con' => 'required|max:280',
            'lik_con' => 'required',
            'vis_con' => 'required',
            'des_con' => 'required',
            'est_con' => 'required'
        ]);

        $fot1_con= Storage::url($request->file('fot1_con')->store('public/image/constructions'));
        $fot2_con= Storage::url($request->file('fot2_con')->store('public/image/constructions'));
        $fot3_con= Storage::url($request->file('fot3_con')->store('public/image/constructions'));
        $con_con= Storage::url($request->file('con_con')->store('public/data/constructions'));
        $construccion = new Construcciones();
        $construccion->ide_usu = auth()->user()->id;
        $construccion->nom_con = $request->nom_con;
        $construccion->fot1_con = $fot1_con;
        $construccion->fot2_con = $fot2_con;
        $construccion->fot3_con = $fot3_con;
        $construccion->con_con = substr($con_con,8);
        $construccion->est_con = $request->est_con;
        $construccion->txt_con = $request->txt_con;
        $construccion->lik_con =  (int) $request->lik_con;
        $construccion->des_con =  (int) $request->des_con;
        $construccion->vis_con =  (int) $request->vis_con;
        $construccion->save();
        

      
        return view('home');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $con = Construcciones::where('est_con', 'Activa')->get();
        return view('construcciones.home_constructions',['con' => $con]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Construcciones $construccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Construcciones $construccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Construcciones $construccion)
    {
        //
    }
    public function down($con_con){

        $con= storage_path("app/public/contratos/".$con_con);
        return response()->download($con);

}

}
