from django.shortcuts import render
from .models import *

# Create your views here.

def VerIndex(request):
    busca_os = OrdemServico.objects.all()
    return render(request, "index.html", {'ordemsevico':busca_os})


