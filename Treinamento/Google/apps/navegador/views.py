from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def navegar(request):
    return HttpResponse("vamos navegar")