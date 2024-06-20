from django.shortcuts import render
from .models import *

def Vitrine(request):
    roupa = Estoque.objects.all()
    return render(request, "vintrine.html", {"produto":roupa} )


