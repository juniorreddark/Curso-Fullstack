from django.urls import path
from .views import *

urlpatterns = [
    path("", VerIndex, name="pg_inicial"),
    path("criar-cliente", CriarCliente, name="pg_criar_cliente")
]
