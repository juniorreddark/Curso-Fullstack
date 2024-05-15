from django.db import models

class Pessoas(models.Model):
    nome = models.CharField(max_length=50)
    idade = models.PositiveIntegerField()

    def __str__(self):
        return self.nome
    


