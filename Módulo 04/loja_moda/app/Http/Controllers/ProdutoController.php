<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;
use App\Models\Categoria;
use App\Models\Empresa;

class produtoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $produtos = produto::all();
        $categorias = Categoria::all();
        
       
        return view('produtos.index', compact('produtos','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
                
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validação de imagem
        ]);

        // Processar a imagem, se ela for fornecida
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public'); // Armazenar a imagem na pasta 'public/logos'
        } else {
            $fotoPath = null; // Caso não haja imagem, o campo será nulo
        }
          
        $empresas = Empresa::all();  
                
        $produto = new produto();
        $produto->nome= $request->nome;
        $produto->categoria_id= $request->categoria_id;
        $produto->preco = $request->preco;
        $produto->descricao = $request->descricao;
        $produto->foto = $fotoPath;
        $produto->save();
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produto = produto::find($id);
        return view('produtos.editar', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       

        $produto = produto::find($id);
        $produto->update($request->all());

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produto = produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('sucess', 'Produto removido com sucesso.');
    }

   
}
