from django.urls import path
from .views import *

urlpatterns = [
    path("",PaginaInicial, name="pagina-inicial"),
    path("detalhes", VerProdutos, name="pagina_inicial"),
    path("ver_produto/<int:id_produto>/", DetalhesProduto, name="detalhes_produto"),
    path("produto", CriarProduto , name="cadastra-produto" ),
    path("categoria",CriarCategoria, name="cadastra-categoria" ),
    path("excluir-produto/<int:id_produto>",ExcluirProduto, name="conf_excluir_produto"),
    path("editar-produto/<int:id_produto>/", EditarProduto, name="pg_editar_produto")
   
]
