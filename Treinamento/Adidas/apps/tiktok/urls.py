from django.urls import path
from .views import *

urlpatterns = [
    path("", CriarProduto, name="pagina_inicial"),
    path("", listaProdutos, name="pagina-lista")
]
