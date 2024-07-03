from django.shortcuts import render, redirect
from .models import *
from .forms import *

# Create your views here.

def CriarProduto(request):
    busca_produtos = Produto.objects.all()
    if request.method == "POST":
        novo_produto = FormularioProduto(request.POST,request.FILES)
        if novo_produto.is_valid():
            novo_produto.save()
            return redirect("cadastra-produto")

    else:
        novo_produto = FormularioProduto()
    
    return render(request, "formulario_produto.html", {"formulario":novo_produto, "produtos":busca_produtos})
       
    
def CriarCategoria(request):
    busca_categorias = Maiscategorias.objects.all()
    if request.method == "POST":
        nova_categoria = FormularioCategoria(request.POST)
        if nova_categoria.is_valid():
            nova_categoria.save()
            return redirect("cadastra-categoria")
    else:
        nova_categoria = FormularioCategoria()
        
    return render(request, "formulario_categorias.html", {"formulario":nova_categoria, "categorias":busca_categorias})
        
def PaginaInicial(request):
    busca_produtos = Produto.objects.all()
    return render(request, "index.html", {"produtos": busca_produtos})     
    

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, "lista-produtos.html", {"produtos": produtos_lista})

def DetalhesProduto(request, id_produto):
    busca = Produto.objects.get(id=id_produto)
    return render(request, "detalhes_produto.html", {"produto": busca})