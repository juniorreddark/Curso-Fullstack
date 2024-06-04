from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def ler(request):
    return HttpResponse("vamos todos ler")