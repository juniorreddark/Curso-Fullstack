from django.shortcuts import render
from .models import *

# Create your views here.


def VerProdutos(request):
    produtos_lista = Produto.objects.all()
    return render(request, 'index.html', {'Produtos:produtos_lista'})