from django.db import models

class Aluno(models.Model):
    nome = models.CharField(max_length=100)
    data_nascimento = models.DateField()
    possue_deficiência = models.BooleanField(default=False)

    def __str__(self):
        return self.nome
    
