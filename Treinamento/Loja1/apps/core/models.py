from django.db import models

class Fornecedor(models.Model):
    nome = models.CharField(max_length=50)
    email = models.EmailField(verbose_name="E-mail")
    endereco = models.CharField(max_length=100)

    def __str__(self):
        return self.nome
    

class Estoque(models.Model):
    nome_produto = models.CharField(max_length=50)
    dt_estoque = models.DateField()
    quantidade = models.IntegerField()
    valor_produto = models.DecimalField(max_digits=10, decimal_places=2)
    fornecedor = models.ForeignKey(Fornecedor, on_delete=models.CASCADE, null=True, blank=True )

    def __str__(self):
        return self.nome_produto
    