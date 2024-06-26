from django.urls import path
from .models import *
from .views import *

urlpatterns = [
    path("", CriarProduto, name ="pagina_produtos")
]
