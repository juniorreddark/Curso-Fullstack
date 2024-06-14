from django.db import models

# Create your models here.

class Produto(models.Model):
    nome_produto = models.CharField(max_length= 100)
    valor_produto = models.DecimalField(decimal_places=2, max_digits=6)

    def __str__(self):
        return self.nome_produto
    
class Vendedor(models.Model):
    nome_vendedor = models.CharField(max_length=100)
    matricula = models.IntegerField()
    email= models.EmailField()
    contato = models.IntegerField()

    def __str__(self):
        return self.nome_vendedor
    

class Cliente(models.Model):
    nome_cliente = models.CharField(max_length=100)
    email= models.EmailField()
    cpf = models.IntegerField()
    celular = models.IntegerField()
    

    def __str__(self):
        return self.nome_cliente
    

class FormaPagamento(models.Model):
    forma_pagamento = models.CharField(max_length=50)
    valor = models.DecimalField(max_digits=10, decimal_places= 2)
    produto = models.ForeignKey( Produto, on_delete=models.CASCADE, null= True, blank=True)

    def __str__(self):
        return self.forma_pagamento + '|' + str(self.valor)
    