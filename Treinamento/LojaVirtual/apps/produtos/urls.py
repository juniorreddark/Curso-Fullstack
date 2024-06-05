from django.urls import path
from .views import *

urlpatterns = [
    path('apresentacao/', saudacao ),
    path('lista-produtos/', VerProdutos),
    path("", LinkInicial, name="pagina_index"),
	path("cadastro", LinkCadastro, name="pagina_cadastro"),

]
