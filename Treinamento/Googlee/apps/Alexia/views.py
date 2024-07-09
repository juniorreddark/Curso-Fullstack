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
    
    return render(request, "pagina-produtos.html", {"formulario":novo_produto, "produtos":busca_produtos})

def VerPoduto(request):
    busca_produtos = Produto.objects.all()
    return render(request, "index.html", {"produtos":busca_produtos})

def EditarProduto(request, id_produto):
    busca_produto = Produto.objects.get(id=id_produto)
    if request.method == "POST":
        produto_editado = FormularioProduto(request.POST, instance=busca_produto)
        if produto_editado.is_valid():
            produto_editado.save()
            return redirect("pagina-produto")
    else:
        produto_editado = FormularioProduto(instance=busca_produto)
    return render(request, "pagina-produtos.html", {"formulario": produto_editado})

def DetalhesProduto(request, id_produto):
    busca = Produto.objects.get()
    return render(request, "detalhes.html", {"produto":busca})

def ExcluirProduto(request, id_produto):
    busca_produto=Produto.objects.get(id=id_produto)
    if request.method== "POST":
        busca_produto.delete()
        return redirect("pagina-produto")


    return render(request, "conf_exclusão_produto.html", {"produto":busca_produto})       
    
      
    
        
    