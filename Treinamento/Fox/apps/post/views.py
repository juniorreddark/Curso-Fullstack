from django.shortcuts import render
from .models import *
# Create your views here.

def saudacao(request):
    return render(request, 'index.html')

def VerProduto(request):
   produtos_lista = Produto.objects.all()
   return render(request, 'index.html', {'produtos': produtos_lista})

def LinkInicial(request):
    return render(request, 'inicial.html')

def LinkCadastro(request):
    return render(request, 'Cadastro.html')