from django.urls import path
from .views import *

urlpatterns = [
    
    path('', LinkInicial, name= 'pagina_index'),
    path('cadastro', LinkCadastro, name= 'pagina_cadastro'),
    path('cliente', LinkCliente, name= 'pagina_cliente'),
    path('vendedor', LinkVendedor, name= 'pagina_vendedor'),
    path('pagamento', LinkPagamento, name= 'pagina_pagamento'),
    path('produto', LinkProduto, name= 'pagina_produto'),
     
]
