from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

def ver(request):
    return HttpResponse("que cada dia das nossas vidas sejam mais feliz")
