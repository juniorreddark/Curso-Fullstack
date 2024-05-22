from django.db import models

class Produto(models.Model):
    nome = models.CharField(max_length=50)
    valor = models.DecimalField(decimal_places=2,max_digits=4)
    foto = models.ImageField(upload_to="foto_perfil/")
    def __str__(self):
        return self.nome
    
