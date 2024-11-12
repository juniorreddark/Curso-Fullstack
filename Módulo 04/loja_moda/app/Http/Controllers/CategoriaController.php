<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nome' => 'required',
            'descricao' => 'required',
        ]);

        $categoria = Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('sucess', 'Categoria criada com sucesso.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.editar', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' =>'required',
        ]);

        $categoria = Categoria::find($id);
        $categoria->update($request->all());

        return redirect()->route('categorias.index')->with('success','Categoria atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $categoria = Categoria::find(($id));
        $categoria->delete();
        return redirect()->route('categorias.index')->with('sucess','Categoria removida com sucesso');
    }
}
