<?php

namespace App\Http\Controllers;
use App\Models\Publicacao;
use App\Models\User;
use App\Models\Empresa;
use Illuminate\Http\Request;


class PublicacoeController extends Controller
{
    public function index()
    {
        // Buscar todas as publicações com as relações de usuário e empresa
        $publicacoes = Publicacoe::with(['user', 'empresa'])->get();
        return view('publicacoes.index', compact('publicacoes'));
    }

    public function create()
    {
        $users = User::all(); // Buscar todos os usuários
        $empresas = Empresa::all(); // Buscar todas as empresas
        return view('publicacoes.create', compact('users', 'empresas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'empresa_id' => 'required|exists:empresas,id',
        ]);

        publicacoe::create($request->all());
        return redirect()->route('publicacoes.index')->with('success', 'Publicação criada com sucesso!');
    }

    public function edit(publicacoe $publicacoe)
    {
        $users = User::all();
        $empresas = Empresa::all();
        return view('publicacoes.edit', compact('publicacao', 'users', 'empresas'));
    }

    public function update(Request $request, Publicacoe $publicacoe)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'empresa_id' => 'required|exists:empresas,id',
        ]);

        $publicacoe->update($request->all());
        return redirect()->route('publicacoes.index')->with('success', 'Publicação atualizada com sucesso!');
    }

    public function destroy(Publicacoe $publicacoe)
    {
        $publicacao->delete();
        return redirect()->route('publicacoes.index')->with('success', 'Publicação deletada com sucesso!');
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
