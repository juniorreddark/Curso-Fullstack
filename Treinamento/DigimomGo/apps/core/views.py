from django.shortcuts import render
from .models import *
# Create your views here.



def LinkInicial(request):
    return render(request, 'index.html')

def LinkCadastro(request):
    return render(request, 'cadastro.html')