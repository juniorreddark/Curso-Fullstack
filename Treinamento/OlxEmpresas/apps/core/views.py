from django.shortcuts import render, redirect
from .models import *
from .forms import *

# Create your views here.

def VerIndex(request):
    busca_ordemservico = OrdemServico.objects.all()

    for ordemservico in busca_ordemservico:
        valor_ordemservico = 0
        for servico in ordemservico.servico.all():
            valor_ordemservico = valor_ordemservico + servico.valorservico
        ordemservico.valor_total = valor_ordemservico

    return render(request, "index.html", {"ordemservico": busca_ordemservico})

def CriarCliente(request):
    busca_clientes = Cliente.objects.all()

    if request.method == "GET":
        novo_cliente = FormularioCliente()
    else:
        cliente_preenchido = FormularioCliente(request.POST, request.FILES)
        if cliente_preenchido.is_valid():
            cliente_preenchido.save()
            return redirect("pg_criar_cliente")
    return render(request, "form-cliente.html", {"form_cliente": novo_cliente, "clientes": busca_clientes })
       
    


    

