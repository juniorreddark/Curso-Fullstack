from django import forms
from .models import *

class FormularioCategoria(forms.ModelForm):
    class Meta:
        model = Maiscategorias
        fields = "__all__"

    
class FormularioProduto(forms.ModelForm):
    class Meta:
        model = Produto
        fields = "__all__"