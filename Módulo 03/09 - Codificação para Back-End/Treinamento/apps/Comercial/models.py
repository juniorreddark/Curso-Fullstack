from django.db import models

class produtos(models.Model):
    nome = models.CharField(max_length=50)
    dt_entrada = models.DateField()
    quantidade = models.IntegerField()
    codigo_de_barra = models.IntegerField()
    validade = models.DateField()

    def __str__(self):
        return self.nome
    