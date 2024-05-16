from django.db import models

class Estudante(models.Model):
    nome = models.CharField(max_length=50)

    TIPO_SEXO = (
        ("M","Masculino"),
        ("F","Feminino")
    )

    def __str__(self):
        return self.nome
    
    sexo = models.CharField(max_length=2, choices=TIPO_SEXO)

    valor = models.DecimalField(max_digits=4, decimal_places=2)

    preco = models.DecimalField(max_digits=10, decimal_places=2, verbose_name="Preço")

    
    
        