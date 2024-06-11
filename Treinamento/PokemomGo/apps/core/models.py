from django.db import models

# Create your models here.
class Produto(models.Model):
    nome_produto= models.CharField(max_length=100)
    valor_produto = models.DecimalField(decimal_places=2, max_digits=6)
