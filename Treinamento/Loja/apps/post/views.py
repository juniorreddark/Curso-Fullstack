from django.shortcuts import render
from django.http import HttpResponse
from .models import *
# Create your views here.

def saudacao(request):
    return render(request,'index.html')

def VerProduto(request):
    produtos_lista = Produto.objects.all()
    return render(request, 'index.html', {'produtos':produtos_lista})