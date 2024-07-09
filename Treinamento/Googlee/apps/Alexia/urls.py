from django.urls import path
from .views import *

urlpatterns = [
    path("criar", CriarProduto, name="pagina_inicial"),
    path("", VerPoduto, name="pagina-produto"),
    path("ver_produto/<int:id_produto>", DetalhesProduto, name="detalhes_produto"),
    path("editar-produto/<int:id_produto>",EditarProduto, name="pg-editar-produto"),
    path("excluir-produto/<int:id_produto>",ExcluirProduto, name="conf_excluir_produto")

]
