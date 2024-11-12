<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'razao_social'=>'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'telefone' => 'required',
            'cep' =>'required',
            'logo' =>'required',
            'rede_social' => 'required',
            'pedido_id' => 'required',

        ]);

        $empresa = Empresa::create($request->all());
        return redirect()->route('empresas.index')->with('success', 'Empresa criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        $empresa = Empresa::find($id);
        return view('empresa.editar', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'razao_social'=>'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'telefone' => 'required',
            'cep' =>'required',
            'logo' =>'required',
            'rede_social' => 'required',
            'pedido_id' => 'required',

        ]);

        $empresa = Empresa::find($id);
        $empresa->update($request->all());
        return redirect()->route('empresas.index')->with('success', 'Empresa atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return redirect()->route('empresas.index')->with('sucess', 'Empresa removida com sucesso');
    }
}
