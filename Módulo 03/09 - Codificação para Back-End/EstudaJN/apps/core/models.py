from django.db import models

class Aula(models.Model):
    STATUS = (
        ("y", "Assistida"),
        ("N","Não assistida")
    )

    titulo = models.CharField(max_length=100, verbose_name="Titulo")
    professor = models.CharField(max_length=100)
    aula_status = models.CharField(max_length=2, choices= STATUS)

    valor_aula = models.DecimalField(decimal_places=2, max_digits=5)
   

    def __str__(self):
        return self.titulo
    
    class Meta:
        ordering = ('pk',)
        verbose_name = "@ula"
        verbose_name_plural = "@ulas"