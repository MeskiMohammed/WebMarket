<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\SousFamille;
use Illuminate\Http\Request;

class SousFamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.sous-familles.index", ["sousFamilles"=> SousFamille::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sous-familles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $sousFamille = new SousFamille();
        $sousFamille->libelle = $request->libelle;
        $sousFamille->image = 'images/'.$imageName;
        $sousFamille->famille_id = $request->famille_id;
        $sousFamille->save();
        return redirect(route('sous-familles.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SousFamille $sousFamille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SousFamille $sousFamille)
    {
        return view('admin.sous-familles.modify',compact('sousFamille'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SousFamille $sousFamille)
    {
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $sousFamille->update(['image'=>'images/'.$imageName]);
        }
        $sousFamille->update(['libelle'=>$request->libelle]);
        $sousFamille->update(['famille_id'=>$request->famille_id]);
        return redirect(route('sous-familles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SousFamille $sousFamille)
    {
        $sousFamille->delete();
        return redirect(route('sous-familles.index'));
    }
}
