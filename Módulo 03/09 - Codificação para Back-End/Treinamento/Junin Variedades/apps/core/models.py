from django.db import models

class Alimentos(models.Model):
    nome = models.CharField(max_length=50)

    def __str__(self):
        return self.nome
    
    foto = models.ImageField(upload_to="foto_perfil/")