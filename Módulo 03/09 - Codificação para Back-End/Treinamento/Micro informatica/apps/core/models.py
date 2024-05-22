from django.db import models

class Produto(models.Model):
    nome = models.CharField(max_length=50)
    foto = models.ImageField(upload_to="foto_perfil/")
   

    def __str__(self):
        return self.nome 
    
    TIPO_SEXO = (
        ("M","Masculino"),
        ("F","Feminino")
    )

    sexo = models.CharField(max_length=2,choices=TIPO_SEXO)

    valor = models.DecimalField(decimal_places=2, max_digits=4)
