from django.shortcuts import render
from .models import *
# Create your views here.



def LinkInicial(request):
    return render(request, 'index.html')

def LinkCadastro(request):
    cadastro_lista = Cadastro.objects.all()
    return render(request, 'cadastro.html', {'cadastros': cadastro_lista})

def LinkCliente(request):
    cliente_lista = Cliente.objects.all()
    return render(request,'cliente.html', {'cliente':cliente_lista})

def LinkVendedor(request):
    vendedor_lista = Vendedor.objects.all()
    return render(request,'vendedor.html', {'vendedores': vendedor_lista })

def LinkPagamento(request):
    pagamento_lista = FormaPagamento.objects.all()
    return render(request,'pagamento.html', {'pagamentos':pagamento_lista})

def LinkProduto(request):
    produto_lista = Produto.objects.all()
    return render(request,'produto.html', {'produtos': produto_lista})