from django.db import models

# Create your models here.

class Maiscategorias(models.Model):
    nome_categoria = models.CharField(max_length=50)

    def __str__(self):
        return self.nome_categoria
    
class Produto(models.Model):
    nome_produto = models.CharField(max_length=100)
    valor_produto = models.DecimalField(decimal_places=2, max_digits=10)
    foto = models.ImageField(upload_to="foto")
    informacao = models.CharField(max_length=100)    