from django.contrib import admin
from .models import *
# Register your models here.

admin.site.register(Produto)
admin.site.register(Cliente)
admin.site.register(Vendedor)
admin.site.register(FormaPagamento)
admin.site.register(Cadastro)