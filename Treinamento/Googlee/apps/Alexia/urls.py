from django.urls import path
from .views import *

urlpatterns = [
    path("criar", CriarProduto, name="pagina_inicial"),
    path("", VerPoduto, name="pagina-produto" ),
    path("editar-produto/<int:id_produto>", EditarProduto, name="pg_editar_produto"),
    path("ver_produto/<int:id_produto>", DetalhesProduto, name="detalhes_produto")

]
