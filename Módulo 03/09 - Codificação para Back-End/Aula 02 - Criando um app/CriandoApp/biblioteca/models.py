from django.db import models

class Autor(models.Model):
    nome = models.CharField(max_length=50)
    data_nascimento = models.DateField()

    def __str__(self):
        return self.nome + " " + str (self.data_nascimento)

class Livro(models.Model):
    nome = models.CharField(max_length=100)
    ano_publi = models.DateField()
    editora = models.CharField(max_length=50, default="aguardando editora")
    editora2 = models.CharField(max_length=50, null=True,blank=True)
    editora3 = models.CharField(max_length=50,blank=True)
    autor = models.ForeignKey(Autor, on_delete=models.CASCADE)

    def __str__(self):
        return self.nome
    
    