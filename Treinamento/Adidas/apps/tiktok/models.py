from django.db import models

# Create your models here.

class Produto(models.Model):
    nome_produto = models.CharField(max_length=100)
    valor_produto = models.DecimalField(decimal_places=2, max_digits=10)
    foto = models.ImageField(upload_to="foto_perfil/", null= True, blank=True )

    def __str__(self):
        return self.nome_produto
    
