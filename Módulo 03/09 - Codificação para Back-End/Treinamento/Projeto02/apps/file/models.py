from django.db import models

class Arquivos(models.Model):
    nome = models.CharField(max_length=100)
    foto = models.ImageField(upload_to="foto_perfil/")
    def __str__(self):
        return self.nome
    