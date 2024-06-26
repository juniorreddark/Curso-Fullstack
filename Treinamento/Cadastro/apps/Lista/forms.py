from django import forms
from .models import *

class FormularioProduto(forms.ModelForm):
    class Meta:
        model = Produto
        fields = ['nome_produto', 'valor_produto', 'foto', 'data_fabricacao']