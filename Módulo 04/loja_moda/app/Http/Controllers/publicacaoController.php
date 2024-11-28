<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Publicacao;
use App\Models\User;
use App\Models\Empresa;
use App\Models\produto;
use App\Models\Categoria;

class PublicacaoController extends Controller
{
    public function index()
    {   
      
        $empresas = Empresa::all();
        $produtos = Produto::all();
        /*$produtos = Produto::limit(5)->get();*/
        $categorias = Categoria::all();
        // Obter todos os registros da tabela publicacaos
        $publicacoes = Publicacao::all();  // Usando Eloquent para buscar todos os dados
        // Passar a variável para a visualização
        
        return view('publicacoes.index', compact('publicacoes','empresas','produtos','categorias',));  // Passando o nome correto
    }

    public function create()
    {   
      
        $empresas = Empresa::all();
        $produtos = produto::all();
        $categorias = Categoria::all();
        $publicacoes = publicacao::all();
        $users = User::all();

        return view('publicacoes.create', compact('users', 'empresas', 'produtos','categorias','publicacoes',));
    }

    public function store(Request $request)
    {
        
        Publicacao::create($request->all());
        return redirect()->route('publicacaos.index')->with('success', 'Publicação criada com sucesso!');
    }

    public function edit($id)
    {
       
        $categorias = Categoria::all();
        $publicacaos = Publicacao::all();
        $produtos = produto::all();
        $empresas = Empresa::all();
        return view('publicacoes.edit', compact('publicacaos','empresas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'empresa_id' => 'required|exists:empresas,id',
            'produto_id' => 'required|existes:produtos,id',
        ]);

        $publicacoe->update($request->all());
        return redirect()->route('publicacaos.index')->with('success', 'Publicação atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $publicacao->delete();
        return redirect()->route('publicacaos.index')->with('success', 'Publicação deletada com sucesso!');
    }

    /*$user = User::find(1); // Encontrar um usuário
        $empresa = Empresa::find(1); // Encontrar uma empresa

        // Criar uma nova publicação
        $publicacao = new Publicacao([
            'titulo' => 'Título da Publicação',
            'conteudo' => 'Conteúdo da publicação aqui...',
        ]);

        // Associar ao usuário e à empresa
        $publicacao->user()->associate($user);
        $publicacao->empresa()->associate($empresa);

        // Salvar a publicação
        $publicacao->save();
        Acessar as Publicações de um Usuário ou Empresa
        php
        Copiar código
        // Acessar as publicações de um usuário
        $user = User::find(1);
        $publicacoes = $user->publicacoes; // Todas as publicações do usuário

        // Acessar as publicações de uma empresa
        $empresa = Empresa::find(1);
        $publicacoes = $empresa->publicacoes; // Todas as publicações da empresa*/
}
