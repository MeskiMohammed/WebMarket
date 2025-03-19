<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.familles.index',['familles'=> Famille::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.familles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        $imageName = $request->file('image')->store('images','public');

        $famille = new Famille();
        $famille->libelle = $request->libelle;
        $famille->image = 'storage/'.$imageName;
        $famille->save();
        return redirect(route('familles.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        return view('admin.familles.modify',compact('famille'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Famille $famille)
    {        
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $famille->update(['image'=>'images/'.$imageName]);
        }
        $famille->update(['libelle'=>$request->libelle]);
        return redirect(route('familles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $famille)
    {
        $famille->delete();
        return redirect(route('familles.index'));
    }
}
