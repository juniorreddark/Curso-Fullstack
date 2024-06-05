from django.shortcuts import render
from .models import *

def saudacao(request):
    return render(request, 'index.html')

def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, 'index.html', {'produtos':produtos_lista})

def LinkInicial(request):
    return render(request, 'index.html')

def LinkCadastro(request):
    return render(request, 'cadastro.html')