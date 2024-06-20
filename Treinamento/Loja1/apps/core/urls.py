from django.urls import path
from .views import *

urlpatterns = [
    path("", Vitrine, name="pagina_produto")
    
]
