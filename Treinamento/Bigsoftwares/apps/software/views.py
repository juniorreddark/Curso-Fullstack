from django.shortcuts import render, redirect
from .models import *
from .forms import *

# Create your views here.

def CriarProduto(request):
    busca_produtos = Produto.objects.all()
    if request.method == "POST":
        novo_produto = FormularioProduto(request.POST)
        if novo_produto.is_valid():
            novo_produto.save()
            novo_produto = FormularioProduto()
    else:
        novo_produto = FormularioProduto()
    return render(request, "index.html", {"formulario":novo_produto, "produtos":busca_produtos})

 
      
    