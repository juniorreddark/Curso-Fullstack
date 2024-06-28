from django.db import models

# Create your models here.

class Produto(models.Model):
    nome_produtos = models.CharField(max_length=100)
    valor_produtos = models.DecimalField(decimal_places=2, max_digits=10)
    informacoes = models.CharField(max_length=50)

    def __str__(self):
        return self.nome_produtos
    
