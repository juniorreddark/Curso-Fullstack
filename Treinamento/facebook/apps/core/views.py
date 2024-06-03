from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def saudacao():
    return HttpResponse("Olá mundo")