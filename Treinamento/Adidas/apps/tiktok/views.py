from django.shortcuts import render, redirect
from .models import *
from .forms import *

# Create your views here.

def CriarProduto(request):
    busca_produtos = Produto.objects.all()
    if request.method == "POST":
        novo_produto = FormularioProduto(request.POST, request.FILES)
        if novo_produto.is_valid():
            novo_produto.save()
            return redirect("pagina_inicial")
        
    else:
        novo_produto = FormularioProduto()
    return render(request, "index.html", {"formulario":novo_produto, "produtos":busca_produtos})

def listaProdutos(request):
    busca_produtos = Produto.objects.all()
    return render(request, "lista.html", {"produtos":busca_produtos})


def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, "produtos.html", {"produtos": produtos_lista})


def DetalhesProduto(request, id_produto):
    busca = Produto.objects.get(id=id_produto)
    return render(request, "detalhes_produtos.html", {"produtos":busca})

    

