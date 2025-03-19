<?php

namespace App\Http\Controllers;

use App\Models\DetailsCommande;
use Illuminate\Http\Request;

class DetailsCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.details-commandes.index',['detailsCommandes'=> DetailsCommande::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.details-commandes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DetailsCommande::create($request->all());
        return redirect('details-commandes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailsCommande $detailsCommande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailsCommande $detailsCommande)
    {
        return view('admin.details-commandes.modify',$detailsCommande);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailsCommande $detailsCommande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailsCommande $detailsCommande)
    {
        $detailsCommande->delete();
        return redirect('details-commandes.index');
    }
}
