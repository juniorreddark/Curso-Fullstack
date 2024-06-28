from django.urls import path
from .views import *

urlpatterns = [
    path("", CriarProduto,name="pagina_produtos"),
    path("lista",CriarProduto, name="lista_produtos")
]
