from django.db import models

# Create your models here.

class cliente(models.Model):
    nome = models.CharField(max_length=100)
    data_nascimento = models.DateField()
    foto = models.ImageField(upload_to="foto_perfil")

    def __str__(self):
        return self.nome
    
class Empresa(models.Model):
    razao_social = models.CharField(max_length=100)
    cnpj = models.PositiveIntegerField()

    def __str__(self):
        return self.razao_social
    
class Categoria(models.Model):
    tipo = models.CharField(max_length=100)

    def __str__(self):
        return self.tipo

class Servico(models.Model):
    tipo_servico = models.CharField(max_length=100)
    valor_servico = models.DecimalField(decimal_places=2, max_digits=10)
    Empresa = models.ForeignKey(Empresa, on_delete=models.CASCADE)
    Categoria = models.ForeignKey(Categoria, on_delete=models.DO_NOTHING)

    def __str__(self):
        return self.tipo_servico
    

class OrdemServico(models.Model):
    cliente = models.ForeignKey(cliente, on_delete=models.CASCADE)
    Servico = models.ManyToManyField(Servico)
    data_servico = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return "OS: " + self.id + " | " + self.cliente.nome
    

    




    

    