from django.urls import path
from .views import *

urlpatterns = [
    
    path('produtos/',VerProduto, name= 'pagina_produtos'),
    path('inicial/',LinkInicial, name= 'pagina_index'),
    path('cadastro/',LinkCadastro, name='pagina_cadastro')
]
