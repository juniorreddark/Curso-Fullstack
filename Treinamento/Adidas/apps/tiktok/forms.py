from django import forms 
from .models import *

class FormularioProduto(forms.ModelForm):
    class Meta:
        model = Produto
        fields = "__all__"
        