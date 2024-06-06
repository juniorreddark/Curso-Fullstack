from django.db import models

# Create your models here.
class Produto(models.Model):
    nome_produto  = models.CharField(max_length=50)
    valor_produto  = models.DecimalField( max_digits=5, decimal_places=2)

    def __str__(self):
        return self.nome_produto 
    