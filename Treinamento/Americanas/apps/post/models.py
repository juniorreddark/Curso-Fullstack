from django.db import models

# Create your models here.

class Produto(models.Model):
    nome_produto = models.CharField(max_length=50)
    valor_produto = models.DecimalField(decimal_places=2, max_digits=10)

    def __str__(self):
        return self.nome_produto
    