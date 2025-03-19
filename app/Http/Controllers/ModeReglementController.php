<?php

namespace App\Http\Controllers;

use App\Models\ModeReglement;
use Illuminate\Http\Request;

class ModeReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.mode-reglements.index', ['modeReglements'=> ModeReglement::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mode-reglements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ModeReglement::create($request->all());
        return redirect(route('mode-reglements.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ModeReglement $modeReglement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModeReglement $modeReglement)
    {
        return view('admin.mode-reglements.modify',$modeReglement);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModeReglement $modeReglement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModeReglement $modeReglement)
    {
        $modeReglement->delete();
        return redirect(route('mode-reglements.index'));
    }
}
