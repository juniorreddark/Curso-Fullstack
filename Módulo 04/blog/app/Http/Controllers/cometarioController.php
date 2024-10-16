<?php

namespace App\Http\Controllers;

use App\Models\cometario;
use Illuminate\Http\Request;

class cometarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cometarios = cometario::all();
        return view('comentarios.index', ['cometarios' => $cometarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cometarios.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(cometario $cometario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cometario $cometario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cometario $cometario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cometario $cometario)
    {
        //
    }
}
