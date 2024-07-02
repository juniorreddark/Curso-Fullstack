from django.urls import path
from .views import *

urlpatterns = [
    path("", CriarProduto, name="pagina_inicial"),
    path("lista", listaProdutos, name="pagina-lista"),
    path("produtos", VerProdutos, name="pg_produtos"),
    path("ver_produto/<int:id_produto>/", DetalhesProduto, name="detalhes_produto")
]
